<!DOCTYPE html>
<?php
      define('ROOT',dirname(__FILE__));
      require_once(ROOT.'/PHPComponents/Router.php');
      $router=new Router();
      $router->run();
      ?>


