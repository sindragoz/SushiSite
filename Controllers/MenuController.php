<?php

include_once ROOT.'/Model/Menu.php';
include_once ROOT.'/DB.php';

class MenuController {
    
    public function actionIndex(){ 
       // echo 'ROOT:'.ROOT;
        require_once (ROOT.'/menu.php');
    }
    
}
