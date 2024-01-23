<?php
 include "database.php";


?>

<?php
if(isset($_SESSION['logged_user'])):?> Ви Авторизовані!
Вітаємо <?php echo $_SESSION['logged_user']->login; ?>
<hr>

<?php else : ?>


<?php endif; ?>	




<!DOCTYPE html>
<html lang="ua">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  		
	<meta charset="UTF-8">
		  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


			<style>
				.rounded-img {
					width: 80%;
					border-radius: 3%;
					box-shadow: 0 0 50px rgba(26,9,9,0.5);
					padding: 1em;
				}
				.containerr {
  					margin-top: 50px;
  					margin-bottom: 10px;
				}

			</style>
	</head>

	<body> 
	<nav class="navbar navbar-expand-lg bg-body-tertiary  ">
  <div class="container  ">
    <a class="navbar-brand p-0" href="/">  ВОКЗАЛ</a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Домашня сторінка</a>
        <a class="nav-link" href="mashenistu.php">Машиністи</a>
		<a class="nav-link" href="cashier.php">Касири</a>
        <a class="nav-link" href="dispetchers.php">Диспетчери</a>
		<a class="nav-link" href="pasagiri.php">Пасажири</a>
		<a class="nav-link" href="tiket.php">Квитки</a>
		<a class="nav-link" href="trains.php">Потяги</a>
		<!-- <a class="nav-link" href="add_data.php">Пробник(не забыть удалить)</a> -->
        <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
		

      </div>
    </div>
  </div>
</nav> 
	<div class="container text-center , containerr ">
		    <div class="row">

				<div class="col-lg-6 mx-auto">

					<img class= "rounded-img " src="vokzal12.jpg" alt="картинки не будет блєт"/>
					<h1 >Головна сторінка </h1>
					<h2>Ви доєдналися до бази данних <?php echo $name_db; ?></h2>
					<div class="container">

						<p class="lead text-muted col-lg-6 mx-auto">База даних створена студентами: Чередник Матвій та Швець Євгеній </p>
					</div>
					
					
						<a href="all.php" >

							<!-- <button  type="button" class="btn btn-primary">Головне меню</button> -->
							<?php
if(isset($_SESSION['logged_user'])):?> 
<hr>

<a href="all.php" >
<button type="button" class="btn btn-primary">Головне меню</button>
<br>
<a href="/logout.php" class="btn btn-logout">Вийти</a>


<?php else : ?>


	<a class="nav-link" href="signup.php">Реєстрація</a>
	  <a class="nav-link" href="login.php">Вхід</a>
<?php endif; ?>	
						</a>
				</div>
			</div>
	</div>
	</body>


</html>
<!-- <?php	
// $result = mysqli_query($link,"SELECT * FROM `train`");


// while($train = mysqli_fetch_assoc($result))
// {
// 	echo $train['type'];
// 	echo "<br>";
// }
// echo "<br>";
// $result = mysqli_query($link,"SELECT * FROM `driver`");

// while($driver = mysqli_fetch_assoc($result))
// {
// 	echo $driver['name'];
// 	echo "<br>";
// }
//$cashier = mysqli_fetch_assoc($result);
//print_r($cashier);
//echo "<br>";

//$cashier = mysqli_fetch_assoc($result);
//print_r($cashier);
//echo "<br>";
//echo $cashier['cashier_name'];

?> -->