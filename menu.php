<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Menu</title>
   <?php include_once(ROOT.'/SiteComponents/StylesIncluding.php');?> 
  </head>
  <body>
 <header>
      <?php include_once(ROOT.'/SiteComponents/logotype.php');?>
     </div>
     </div>
    </header>
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
      <div class="sushi_menu">
        <ul>
          <li>МЕНЮ</li>
          <li><img src="http://localhost/phpsushisite/sources/images/sushi-icon.png" alt=""><a href="/PhpSushiSite/menu/rolls">Роллы</a></li>
              <?php 
//                include_once(ROOT.'/Controllers/MenuController.php');
//               // if(count(MenuController::$menuList)>0){
//                print_r(MenuController::$menuList);
//                  foreach(MenuController::$menuList as $value){
//                      echo $value.'<br>';
//                      
//                //  }
//              }
              ?>
          <li><img src="http://localhost/phpsushisite/sources/images/sushi-icon.png" alt=""><a href="/PhpSushiSite/menu/sets">Сеты</a></li>
          <li><img src="http://localhost/phpsushisite/sources/images/sushi-icon.png" alt=""><a href="/PhpSushiSite/menu/salads">Салаты</a></li>
          <li><img src="http://localhost/phpsushisite/sources/images/sushi-icon.png" alt=""><a href="/PhpSushiSite/menu/drinks">Напитки</a></li>
        </ul>
        </div>
        </div>
            <div class="col-md-8 col-md-offset-1">
                <?php if(MenuController::$menuList!=null):  
                    foreach(MenuController::$menuList as $value):?>
                <div class="MenuItemWrap">
                    <span><?php echo $value['Name'];?></span>
                    <div class="MenuItemPic">
                    <img src=<?php echo 'http://localhost/phpsushisite/'.$value['pic'];?>>
                    </div>
                    <p><?php echo $value['Price'].'p.';?>
                       <!-- <img src="https://png.icons8.com/color/24/shopping-basket.png" title="Корзина"width="30px" height="30px">!-->
                    </p><br><p id="add_item">В корзину</p>
                </div>
                 
                 
                
                <?php endforeach;?>
                <?php endif;?>
            </div>
      </div>
      </div>
    </nav>
   </body>
  </html>
