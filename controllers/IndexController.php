<?php

class IndexController {
    
    public function actionIndex(){
       
        Base::genCaptcha();
        
        require_once(ROOT.'/views/index/index.php');
        
        return true;
    }
    
    public function actionList($sort = Base::sort, $order = Base::order, $page = 1){
        
        $listUserData = Base::getUserDataList($sort, $order, $page);
        
        $total = Base::getTotalLine();
        
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Base::limit, 'page-');
        
        require_once(ROOT.'/views/index/list.php');
        
        return true;
    }
    
    public function actionAdd(){
        
        $errors = Base::check();
        
        // Если пользователь ввел верные данные - записать в БД
        // Очистить сессию и вернуться на страницу с формой
        if($errors){
            Base::genCaptcha();
            require_once(ROOT.'/views/add/error.php');
        }
        else{
            // Запись данных в БД
            $result = Base::saveToDb();
            
            // Если запись произведена - очищаем сессию
            session_unset();
            session_destroy();
            
            require_once(ROOT.'/views/add/save.php');
        }
        
        return true;
    }
    
}
