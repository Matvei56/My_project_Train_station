<?php



require "database.php";
$data = $_POST;


 
if (isset($data['do_signup'])) {
    $errors = array();

    if (trim($data['login']) == '') {
        $errors[] = 'Введіть логін!';
    }

    if (trim($data['email']) == '') {
        $errors[] = 'Введіть email!';
    }

    if ($data['password'] == '') {
        $errors[] = 'Введіть пароль!';
    }

    if ($data['password2'] != $data['password']) {
        $errors[] = 'Пароді не співпадають!';
    }

    if (R::count('users', "login = ?", array($data['login']))
        > 0) {
        $errors[] = 'Цей логін вже існує!';
    }

    if (R::count('users', "email = ?", array($data['email']))
        > 0) {
        $errors[] = 'Цей email зайнятий!';
    }

    if (empty($errors)) {
        // $rdb = R::setup('mysql:host=localhost;dbname=train_station', 'root', '');

        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
        echo '<div style="color: green;">Успіх! </div><hr>';
    } else {
        echo '<div style="color: red;">' . print_r($errors, true) . '</div>header_remove()';
    }
}

 
 




 ?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  		
          <meta charset="UTF-8">
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      
                  <form action="signup.php" method="POST" class="form-signup text-center">

<div class="form-group">
    <label for="login">Логін</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Введіть логін">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Введіть email">
</div>

<div class="form-group">
    <label for="password">Пароль</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Введіть пароль">
</div>

<div class="form-group">
    <label for="password2">Введіть пароль ще раз</label>
    <input type="password" class="form-control" id="password2" name="password2" placeholder="Повторіть пароль">
</div>

<button type="submit" name="do_signup" class="btn btn-primary">Зареєструватися</button>
<a href="index.php" >

							
    <button  type="button" class="btn btn-primary">Головне меню</button>
						</a>
</form>




