<?php

class Base {
    
    const limit = 25;
    const order = 'user_name';
    const sort = 'asc';
    
    public static function getUserDataList($sort = self::sort, $order = self::order, $page = 1){
        
        $limit = self::limit;
        
        $offset = ($page - 1) * $limit;
        
        $db = Db::getConnection();
        
        $query = "SELECT * FROM user_data ORDER BY $order $sort LIMIT $limit OFFSET $offset";
        
        //$query = "SELECT * FROM user_data ORDER BY order = :order sort = :sort "
        //        ."LIMIT limit = :limit OFFSET offset = :offset";
        
        $result = $db->query($query);
        //$result = $db->prepare($query);
        //$result->bindParam(':order', $order, PDO::PARAM_STR);
        //$result->bindParam(':sort', $sort, PDO::PARAM_STR);
        //$result->bindParam(':limit', $limit, PDO::PARAM_INT);
        //$result->bindParam(':offset', $offset, PDO::PARAM_INT);
        
        //$result->execute();
        
        $ListUserData = $result->fetchAll();
        
        return $ListUserData;
    }
    
    /*
     * Метод проверяет корректность введенных пользователем данных
     */
    public static function check(){
        
        $errors = false;
        /*
         *  получение данных из формы, обрезка пробельных символов,
         * преобразование html кода в строку
         */
        $user_name = htmlspecialchars(trim($_POST['user_name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $homepage = htmlspecialchars(trim($_POST['homepage']));
        $captcha = htmlspecialchars(trim($_POST['captcha']));
        $text = htmlspecialchars(trim($_POST['text']));
        
        // Очищенные данные записываются в сессию
        $_SESSION['user_name'] = $user_name;
        $_SESSION['email'] = $email;
        $_SESSION['text'] = $text;
        if($homepage == ''){
            $_SESSION['homepage'] = 'n/a';
        }
        
        // проверка введенных данных
        
        /*
         *  Шаблон - имя пользователя должно содержать латинские буквы
         * и цифры
         */
        $pattern  = "([a-z A-Z 0-9]+)";
        if($user_name == '' || !preg_match("/$pattern/", $user_name)){
            $errors['user_name'] = 'input user name';
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) || $email = '') {
            $errors['email'] = 'input correct e-mail';
        }
        if($captcha != $_SESSION['captcha']){
            $errors['captcha'] = 'input correct captcha';
        }
        if($text == ''){
            $errors['text'] = 'input message text';
        }
            return $errors;
    }
    
    public static function saveToDb(){
        
        $user_name = $_SESSION['user_name'];
        $email = $_SESSION['email'];
        $text = $_SESSION['text'];
        $homepage = $_SESSION['homepage'];
        $captcha = $_SESSION['captcha'];
        $ip = $_SERVER['REMOTE_ADDR'];
        
        // определение типа браузера
        $browser = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($browser, "Firefox") !== false) $browser = "Firefox";
        elseif (strpos($browser, "Opera") !== false) $browser = "Opera";
        elseif (strpos($browser, "Chrome") !== false) $browser = "Chrome";
        elseif (strpos($browser, "MSIE") !== false) $browser = "IE";
        elseif (strpos($browser, "Safari") !== false) $browser = "Safari";
        else $browser = "Unknow";
        
        // определение текущей даты
        $add_date = date('Y-m-j');
        
        $db = Db::getConnection();
        
        $query = "INSERT INTO user_data (user_name, email, homepage, "
                . "captcha, text, ip, browser, add_date) "
                . "VALUES (:user_name, :email, :homepage, :captcha, "
                . ":text, :ip, :browser, :add_date)";
        
        $result = $db->prepare($query);
        $result->bindParam(':user_name', $user_name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':homepage', $homepage, PDO::PARAM_STR);
        $result->bindParam(':captcha', $captcha, PDO::PARAM_STR);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        $result->bindParam(':ip', $ip, PDO::PARAM_STR);
        $result->bindParam(':browser', $browser, PDO::PARAM_STR);
        $result->bindParam(':add_date', $add_date, PDO::PARAM_STR);
        
        return $result->execute();  
    }
    
    public static function getTotalLine(){
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "SELECT count(id) AS count FROM user_data";

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Выполнение коменды
        $result->execute();

        // Возвращаем значение count - количество
        $row = $result->fetch();
        
        return $row['count'];
    }
    
    public static function genCaptcha(){
        
        
        $captcha = rand(1000, 9999);
        
        $_SESSION['captcha'] = $captcha;

        $width = 120;
        $height = 30;

        $image = imagecreatetruecolor($width, $height);

        $red = imagecolorallocate($image, 255, 0, 0);
        $black = imagecolorallocate($image, 0, 0, 0);
        $white = imagecolorallocate($image, 255, 255, 255);

        imagefill($image, 0, 0, $red);

        $code = rand(1000, 9999);

        $_SESSION['captcha'] = $code;
        
        //Header("Content-Type: image/png");
        
        imagestring($image, 5, 30, 5, $code, $white);
        
        //Сгенерированный код сохраняется в image/captcha/
        imagepng($image, ROOT.'/image/captcha/cap.png');
        imagedestroy($image);
        
    }
    
}
