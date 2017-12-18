<?php


class Router {
   private $routes;
   public function __construct() {
       $routesPath=ROOT.'/PHPComponents/Routes.php';
       $this->routes=include($routesPath);
   }
   private function takeURI($uri){
        $uri=trim($_SERVER['REQUEST_URI'],'/');
        $uri=explode('/',$uri);
        
        $resultURI='';
        for ($i=1;$i<count($uri);$i++){
          //  echo 'uri[i]='.$uri[$i].'<br>';
         $resultURI=$resultURI.'/'.$uri[$i];   
        }
        return $resultURI;
   }
   public function run(){
       
        if(!empty($_SERVER['REQUEST_URI'])){
            $uri=$this->takeURI($_SERVER['REQUEST_URI']);
           // $uri=trim($_SERVER['REQUEST_URI']);
          //  echo 'uri:'.$uri.'<br>';
            foreach($this->routes as $uriPattern=>$path){
              if(preg_match('~'.$uriPattern.'~',$uri)) {
                  echo'pattarn:'.$uriPattern.'<br>';
                  $intRoute=preg_replace("~$uriPattern~",$path,$uri);
                 echo $intRoute.'-introute<br>';
                 echo '---'.$uri.'-uri<br>';
                  $segments=explode('/',$intRoute);
                //  echo $segments[0];
                //  echo $segments[1];
                  $controllerName=ucfirst(array_shift($segments).'Controller');
                  echo 'controllername:'.$controllerName;
                  $actionName='action'.ucfirst(array_shift($segments));
                  echo '<br>action:'.$actionName.'<br>';
                  $category=$segments;
                  
                  $controllerFile=ROOT.'/Controllers/'.$controllerName.'.php';
                  if(file_exists($controllerFile)){
                      include_once($controllerFile);
                  }
                  $controllerObject=new $controllerName;
                  
                 
                  $result=$controllerObject->$actionName();
                  break;
                if($result!=null){
                   
                }
              }
           }
       }
   }
}
