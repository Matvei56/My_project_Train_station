<?php

require "database.php";

$data = $_POST;
if(isset($data['do_login']))
{
        $errors = array();
        $user = R::findOne('users','login = ?', array($data['login']));
        if($user)
        {
            // пароль є 
            if(password_verify($data['password'], $user->password))
            {
                // все добре
                echo "Успіх ";
                $_SESSION['logged_user']=$user;
                echo "Тепер ви можете перейти до головно сторінки";
            }else 
            {
                $errors[] = "Пароль не вірний";
            }
        }else 
        {
            $errors[]= "Користувача з таким логіном не знайдено";
        }
        if(! empty($errors))
        {
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
}


?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  		
          <meta charset="UTF-8">
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      
                  <form action="login.php" method="POST" class="form-login text-center">

<div class="form-group">
    <label for="login">Логін</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Введіть логін">
</div>
<div class="form-group">
    <label for="password">Пароль</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Введіть Пароль">
</div>


<button type="submit" name="do_login" class="btn btn-primary">Вхід</button>
<a href="index.php" >

							
    <button  type="button" class="btn btn-primary">Головне меню</button>
						</a>
</form>
