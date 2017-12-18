<?php

include_once ROOT.'/DB.php';
class Menu {

    public static function getMenuListByCategory($category){
       $db=DB::getDBConnection();
      
       switch ($category){
           case 'Sushi':
               $sushiList=array();

       $resList=$db->query('select * from roll');
       $i=0;
              while($row =$resList->fetch()){
                   $sushiList[$i]['id']=$row['Roll_id'];
                   $sushiList[$i]['Name']=$row['Name'];
                   $sushiList[$i]['Price']=$row['Price'];
                   $sushiList[$i]['pic']=$row['Roll_pic'];
                   $i++;
               }
               
               return ($sushiList);
               break;
               case 'Sets':
               $sushiList=array();

       $resList=$db->query('select * from sushiset');
       $i=0;
              while($row =$resList->fetch()){
                   $sushiList[$i]['id']=$row['SushiSet_id'];
                   $sushiList[$i]['Name']=$row['Name'];
                   $sushiList[$i]['Price']=$row['Price'];
                   $sushiList[$i]['pic']=$row['SushiSet_pic'];
                   $i++;
               }
       
               return ($sushiList);
               break;
               case 'Salads':
               $sushiList=array();

       $resList=$db->query('select * from salad');
       $i=0;
              while($row =$resList->fetch()){
                   $sushiList[$i]['id']=$row['Salad_id'];
                   $sushiList[$i]['Name']=$row['Name'];
                   $sushiList[$i]['Price']=$row['Price'];
                   $sushiList[$i]['pic']=$row['Salad_pic'];
                   $i++;
               }
       
               return ($sushiList);
               break;
               case 'Drinks':
               $sushiList=array();

       $resList=$db->query('select * from drink');
       $i=0;
              while($row =$resList->fetch()){
                   $sushiList[$i]['id']=$row['Drink_id'];
                   $sushiList[$i]['Name']=$row['Name'];
                   $sushiList[$i]['Price']=$row['Price'];
                   $sushiList[$i]['pic']=$row['Drink_pic'];
                   $i++;
               }
       
               return ($sushiList);
               break;
       }
    }
}
