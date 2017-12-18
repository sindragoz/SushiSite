<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet"type="text/css">
    <link href="css/media.css" rel="stylesheet"type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet"type="text/css">
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
        
      
        </div>
      </div>
    </header>
    <section class="reg_section">
      <div class="reg_container">
         
          <form method="post">

          <div class="reg_forms_wrap">
            <div class="reg_forms">
              <p>Регистрация</p><br>
          <label for="nickname">Имя пользователя: </label>
          <input type="text" name="nickname" id="nickname" ><br>
          <label for="email">Электронная почта: </label>
          <input type="text" name="email" id="email"><br>
          <label for="pass">Пароль: </label>
          <input type="password" name="password" id="pass"><br>
          <input type="submit" name="submit" id="reg_btn"><br>
          <div class="reg_btn_lbl">
          <label for="reg_btn">Зарегистрироватсья</label>
          </div>
          </div>
          </div>
        </form>
         
      </div>
    </section>
  </body>
  </html>
