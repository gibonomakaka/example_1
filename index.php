<?php

session_start();

// Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');

// Вызов Router
$router = new Router();
$router->run();

/*
$db = Db::getConnection();

$browse = array('internet explorer', 'chrome', 'opera', 'safari', 'firefox');
$mail = array('@mail.ru', '@rambler.ru', '@gmail.com', '@vega.kharkov.ua', '@list.ru', '@i.ua', '@ukr.net');

for($i = 1; $i <= 50; $i++){
    if($i < 10){
        $i = "0$i";
    }
    $user_name = "name_$i";
    $email = "email_$i{$mail[array_rand($mail)]}";
    $homepage = "www.homepage_$i.com";
    $captcha = rand(1000, 9999);
    $text = "text_$i";
    $ip = "192.168.".rand(1, 255).".".rand(1, 255);
    $browser = $browse[array_rand($browse)];
    $date = '';
    $mm = rand(1, 12);
    if($mm < 10){
        $mm = '0'.$mm;
    }
    $yy = rand(2010, 2017);
    $dd = rand(1, 30);
    if($dd < 10){
        $dd = '0'.$dd;
    }
    $date = "$yy-$mm-$dd";
    
    $sql = "INSERT INTO user_data (user_name, email, homepage, captcha, text, ip, browser, add_date)"
            . " VALUES ('$user_name', '$email', '$homepage', '$captcha', '$text', '$ip', '$browser', '$date')";
    
    $result = $db->exec($sql);
}
*/
// наполнение данными таблицы worker
/*
for($i = 1; $i <= 5; $i++){
    $sql = "INSERT INTO department (department_name) VALUES ('department_name_$i')";
    $result = $db->exec($sql);
    var_dump($result);
}
 * 
 */
//$db = Db::getConnection();
/*
for($i = 1; $i <= 100; $i++){
    $user_name = "name_$i";
    $email = "email_$i{$mail[array_rand($mail)]}";
    $id_dep = rand(1, 5);
    $mm = rand(1, 12);
    if($mm < 10){
        $mm = '0'.$mm;
    }
    $yy = rand(1975, 1990);
    $dd = rand(1, 30);
    if($dd < 10){
        $dd = '0'.$dd;
    }
    $salary = rand(300, 1500);
    $salary_hour = '';
    $work_hour = '';
    $wage_rate = rand(0, 1);
    if($wage_rate == 1){
        $salary_hour = rand(5, 30);
        $work_hour = rand(40, 160);
    }

    $sql = "INSERT INTO worker (id_department, department_name, surname, name, patronymic, born_day, wage_rate, salary, salary_hour, work_hour) VALUES ('$id_dep','department_name_$id_dep', 'фамилия_$i', 'имя_$i', 'отчество_$i', '$dd/$mm/$yy', '$wage_rate', '$salary', '$salary_hour', '$work_hour')";
    //$sql = "INSERT INTO worker (id_department, department_name, surname, name, patronymic, born_day, wage_rate, salary, salary_hour, work_hour) VALUES ('$id_dep','department_name_$id_dep', 'surname_$i', 'name_$i', 'patronymic_$i', '$dd/$mm/$yy', '$wage_rate', '$salary', '$salary_hour', '$work_hour')";
    $result = $db->exec($sql);
    var_dump($result);
}

//$result = $db->query(SQL_GET_DEPARTMENT_NAME, PDO::FETCH_ASSOC);
//echo '<pre>'.var_dump($result->fetchAll()).'</pre>';
//echo '<pre>'.print_r($result->fetchAll(), true).'</pre>';
*/

/*
foreach($result as $k){
    
    if($k['department_name']){
        echo $k['department_name'];
        echo '<br />';
    }
    else{
        echo 'false';
        echo '<br />';
    }
    //echo $v.'<br />';
    //var_dump($v);
}
 * 
 */

//$result = $db->query(GET_WORKER, PDO::FETCH_ASSOC);

//echo '<pre>'.print_r($result->fetchAll(), true).'</pre>';