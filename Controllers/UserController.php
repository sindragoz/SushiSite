<?php
include_once(ROOT.'/Model/User.php');
class UserController { 
public $reg_error='';
   public function actionRegistration(){
        $nickname='';
        $email='';
        $fileName=ROOT.'/user_data.txt';
        $success=false;
        if(isset($_POST['submit'])){
            
            $user_data=new User();
            $nickname=$user_data->reg_data['name']=$_POST['nickname'];
            $email=$user_data->reg_data['email']=$_POST['email'];
            $pass=$user_data->reg_data['password']=$_POST['password'];
            
            if($this->validateRegData($user_data->reg_data,$user_data,$fileName)!=false){
            file_put_contents($fileName, $user_data->reg_data['name'].':'.$user_data->reg_data['email'].':'.$user_data->reg_data['password']."\r\n", FILE_APPEND);
            $success=true;
            }
        }
        require_once(ROOT.'/reg.php');
    }
        private function containUser($user_data,$fileName){
        $userlist=$user_data->getUserList($fileName);
        $reg_data=$user_data->reg_data;
        if($user_data->reg_data==null)
            return false;
        foreach($userlist as $user){
            if($user['name']==$reg_data['name'])
                return true;
            if($user['email']==$reg_data['email'])
                return true;
        }
        return false;
    }
        private function validateRegData($reg_data,$user_data,$fileName){
            if($this->containUser($user_data,$fileName)==true){
                $this->reg_error='Пользователь с таким именем или почтой уже существует!';
                    return false;
            }
            if(!preg_match('/[a-zA-Z][a-zA-Z0-9-_]+@[a-zA-Z][a-zA-Z0-9-_]+\.[a-zA-Z]+/',$reg_data['email'])){
                $this->reg_error='Неправильный формат e-mail адреса!';
                    return false;
            }
            if(strlen($reg_data['password'])<3){
                 $this->reg_error='Слишком короткий пароль!';
                return false;
            }
            return true;
        }
}
