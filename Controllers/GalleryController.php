<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GalleryController
 *
 * @author User
 */
class GalleryController {
   public function actionShow(){
       require_once ROOT.'/photogallery.php';
   }
}
