<html lang="en">
  <head>
      <title>SushiBar</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet"type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet"type="text/css">
<link href="css/media.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <header>
       <div class="container">
          <div class="row logorow">
           
              <div class="col-md-2 col-md-offset-5">
                 <div class="logo">
                  <a href="index.php"><img src="sources/images/logo.png" alt="" class="logopic"></a>
                 </div>
            </div>
        
      
            <div class="col-md-3 col-md-offset-2">
              <div class="reg_menu_btns">
              <a href="#">Вход</a> | 
              <a href="reg.php">Регистрация</a>
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
             <li><a href="menu.php">Наше меню</a></li>
             <li><a href="photogallery.php">Фотогалерея</a></li>
             <li><a href="#">Контакты</a></li>
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