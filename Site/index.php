<html lang="en">
  <head>
      <title>SushiBar</title>
    <?php include_once(ROOT.'/SiteComponents/StylesIncluding.php');?> 
  </head>
  <body>
    
    <header>
       <?php include_once(ROOT.'/SiteComponents/logotype.php');?>
            <div class="col-md-3 col-md-offset-2">
              <div class="reg_menu_btns">
              <a href="#">Вход</a> | 
              <a href="/<?php echo dir;?>/reg">Регистрация</a>
              
              </div>
            </div>
        </div>
      </div>
     
      <nav class="main_menu">
        <div class="container">
           
          <div class="row menu_row">
               <div id="menu_slide_btn" onclick="slideMenu()"><img src="sources/icons/navicon.png"></div>
                <script type="text/javascript">
         var slideMenu=function(){
             
             var nav=document.getElementById('main_menu_list');
            curStyle=nav.style.cssText;
           
            if(getComputedStyle(nav).height==="0px")
	nav.style.cssText="\
height:300px;\
	transition:ease-in 1s all;\
	";
         else
             nav.style.cssText="\
height:0; \
	transition:ease-in 1s all;\
	";
        
     }
      </script>
            <ul class="main_menu_list" id="main_menu_list">
             <li><a href="#">Главная</a></li>
             <li><a href="/<?php echo dir;?>/menu">Наше меню</a></li>
             <li><a href="/<?php echo dir;?>/gallery">Фотогалерея</a></li>
             <li><a href="/<?php echo dir;?>/contacts">Контакты</a></li>
             <li><a href="#">Специальные предложения</a></li>
           </ul> 
          </div>
        </div>
      </nav>
    </header>
    <section class="main_slider">
      <div class="container">
        <div class="row">
          <div class="slider_wrap">
            <div class="slides slide visible_slide">
            <div class="slider_container">
              <img src="sources/images/slide1.png" alt="">
              <div class="slider_table_cell">
                <div class="slider_text">
                   <span id="str1">Отличная атмосфера</span><br>
                   <span id="str2">Высшее качество
                   </span><br>
                   <span id="str3">Отборные ингредиенты
                   </span><br>
                   <span id="str4">Лучшие повара
                   </span><br>
                 
                   <input type="button" onclick="location.href='menu/rolls'" name="make_order" id="orderbtn" value="dfdsfdsf">
                  <a href="menu/rolls"><label for="orderbtn" id="orderlbl" href="">Сделать заказ</label></a>
                </div>
              </div>  
              </div>
            </div>
            <div class="slides slide">
            <div class="slider_container">
              <img src="sources/images/slide2.jpg" alt="">
            </div>
            </div>
            <div class="slides slide">
            <div class="slider_container">
              <img src="sources/images/slide3.jpg" alt="">
              </div>
            </div>
            <div class="slides slide">
            <div class="slider_container">
              <img src="sources/images/slide4.jpg" alt="">
               
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="slider_btns">
              <input type="radio" checked id="slide_btn1" name="slide_num" onclick="changeSlide(value)" value="1" />
              <label for="slide_btn1"></label>
              <input type="radio" id="slide_btn2" name="slide_num" onclick="changeSlide(value)" value="2" />
              <label for="slide_btn2"></label>
              <input type="radio" id="slide_btn3" name="slide_num" onclick="changeSlide(value)" value="3" />
              <label for="slide_btn3"></label>
              <input type="radio" id="slide_btn4" name="slide_num" value="4" onclick="changeSlide(value)" />
              <label for="slide_btn4"></label>
              
              
             
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row subscribe_bg">
          <div class="subscribe_section">
            <div class="col-md-6 col-sm-12 mid_subscr_class">

              <table class="offer_table">
                <tr>
                  <td>
                    <img src="sources/images/sushi_box.png" alt="">
                  </td>
                  <td>
                    <span>
                    осенний
                    </span>
                    <br>
                    <span>
                    особый набор
                    </span>
                    <br> 
                    <span>Этой осенью мы порадуем вас вкуснейшими роллами. В набор входят филадельфия, маями, фукиниже и многое другое.
                    </span> 
                    <br>
                    <input type="button" id="offer_btn">
                    <label for="offer_btn">Смотреть предложение</label>
                  </td>
                </tr>
              </table>
               <div class="border_class">
                 <div class="border_slash">
                   
                 </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-12 mid_subscr_class">
              <div class="subscr_class">
                <div class="subscr_input">
              <input type="text">
               <input type="button" id="subscribe_btn">
               <label for="subscribe_btn">Подписаться
               </label>
               </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <footer>
     
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
  </body>
</html>