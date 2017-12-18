<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration</title>
     <?php include_once(ROOT.'/SiteComponents/StylesIncluding.php');?> 
    
  </head>
  <body>
 <header>
       <?php include_once(ROOT.'/SiteComponents/logotype.php');?> 
        </div>
      </div>
    </header>
    <section class="reg_section">
      <div class="reg_container">
          <?php if($success):?>
          <p style="color:yellow">Вы успешно зарегестрированы!</p>
          <?php else:?>
          <form method="post">

          <div class="reg_forms_wrap">
            <div class="reg_forms">
              <p>Регистрация</p><br>
          <label for="nickname">Имя пользователя: </label>
          <input type="text" name="nickname" id="nickname" value="<?php echo $nickname;?>"><br>
          <label for="email">Электронная почта: </label>
          <input type="text" name="email" id="email" value="<?php echo $email;?>"><br>
          <label for="pass">Пароль: </label>
          <input type="password" name="password" id="pass"><br>
          <input type="submit" name="submit" id="reg_btn"><br>
          <div class="reg_btn_lbl">
          <label for="reg_btn">Зарегистрироватсья</label>
          </div>
          </div>
          </div>
        </form>
          <p class="errors"><?php echo $this->reg_error;?></p>
          <?php endif;?>
      </div>
    </section>
  </body>
  </html>
