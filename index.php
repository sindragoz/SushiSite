<!DOCTYPE html>
<?php
      define('ROOT',dirname(__FILE__));
      $dir=explode('\\',dirname(__FILE__));
      define('dir',$dir[count($dir)-1]);
      require_once(ROOT.'/PHPComponents/Router.php');
      $router=new Router();
      $router->run();
      ?>


