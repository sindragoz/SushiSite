<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author User
 */
class User {
   public $reg_data=array('name'=>'','email'=>'','password'=>'');
   private $userlist=array(array('name'=>'','email'=>'','password'=>''));
   public function getUserList($fileName){
       $users_data=explode("\r\n",file_get_contents($fileName));
       for($i=0;$i<count($users_data);$i++){
           $user=explode(":",$users_data[$i]);
           $this->userlist[$i]['name']=$user[0];
           $this->userlist[$i]['email']=$user[1];
           $this->userlist[$i]['password']=$user[2];
       }
       return $this->userlist;
   }
}
