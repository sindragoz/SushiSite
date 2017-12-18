<?php

include_once ROOT.'/Model/Menu.php';
include_once ROOT.'/DB.php';

class MenuController {
    
    public function actionIndex(){ 
       // echo 'ROOT:'.ROOT;
        require_once (ROOT.'/menu.php');
    }
    public static $menuList;
    public function actionRollsList(){
     
        self::$menuList=Menu::getMenuListByCategory('Sushi');
        
        require_once (ROOT.'/menu.php');
        return self::$menuList;
    }
     public function actionSetsList(){
     
        self::$menuList=Menu::getMenuListByCategory('Sets');
        
        require_once (ROOT.'/menu.php');
        return self::$menuList;
    }
     public function actionDrinksList(){
     
        self::$menuList=Menu::getMenuListByCategory('Drinks');
        
        require_once (ROOT.'/menu.php');
        return self::$menuList;
    }
     public function actionSaladsList(){
     
        self::$menuList=Menu::getMenuListByCategory('Salads');
        
        require_once (ROOT.'/menu.php');
        return self::$menuList;
    }
}
