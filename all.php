
<?php
 include "database.php";


?>








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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link " aria-current="page" href="/">Домашня сторінка</a>
        <a class="nav-link" href="mashenistu.php">Машиністи</a>
		<a class="nav-link" href="cashier.php">Касири</a>
        <a class="nav-link" href="dispetchers.php">Диспетчери</a>
		<a class="nav-link" href="pasagiri.php">Пасажири</a>
		<a class="nav-link" href="tiket.php">Квитки</a>
		<a class="nav-link" href="trains.php">Потяги</a>
        <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
      </div>
    </div>
  </div>
</nav>
<div class="container my-5">
    <did class="row wor-cols-1 row-cols-md-2 row-cols-lg-3">
	<div class="col">

		<div class="card my-5" >
		  <img src="masinist.jpg" class="card-img-top" alt="Тут повинен був бути поїзд">
		  <div class="card-body">
			<h5 class="card-title">МАШИНІСТИ</h5>
			<p class="card-text">На сторінці цій ви побачите усю інформацю про машиністів та зможете редагувати інформацію </p>
			<a href="mashenistu.php" class="btn btn-primary">Перейти до сторінки</a>
		  </div>
		</div>
	</div>	
	<div class="col">

		<div class="card my-5" >
		  <img src="cashier.jpg" class="card-img-top" alt="Тут повинен був бути касир">
		  <div class="card-body">
			<h5 class="card-title">КАСИРИ</h5>
			<p class="card-text">На сторінці цій ви побачите усю інформацю про касирів та зможете редагувати інформацію </p>
			<a href="cashier.php" class="btn btn-primary">Перейти до сторінки</a>
		  </div>
		</div>
	</div>
	<div class="col">

		<div class="card my-5" >
		  <img src="dispetcher.jpg" class="card-img-top" alt="Тут повинен був бути поїзд">
		  <div class="card-body">
			<h5 class="card-title">ДИСПЕТЧЕРИ</h5>
			<p class="card-text">На сторінці цій ви побачите усю інформацю про диспетчерів та зможете редагувати інформацію </p>
			<a href="dispetchers.php" class="btn btn-primary">Перейти до сторінки</a>
		  </div>
		</div>
	</div>
	<div class="col">

		<div class="card my-5" >
		  <img src="pasajiri.jpg" class="card-img-top" alt="Тут повинен був бути поїзд">
		  <div class="card-body">
			<h5 class="card-title">ПАСАЖИРИИ</h5>
			<p class="card-text">На сторінці цій ви побачите усю інформацю про пасажирів та зможете редагувати інформацію </p>
			<a href="pasagiri.php" class="btn btn-primary">Перейти до сторінки</a>
		  </div>
		</div>
	</div>
	<div class="col">

		<div class="card my-5" >
		  <img src="ticet.webp" class="card-img-top" alt="Тут повинен був бути поїзд">
		  <div class="card-body">
			<h5 class="card-title">КВИТКИ</h5>
			<p class="card-text">На сторінці цій ви побачите усю інформацю про квитки та зможете редагувати інформацію </p>
			<a href="tiket.php" class="btn btn-primary">Перейти до сторінки</a>
		  </div>
		</div>
	</div>
	<div class="col">

		<div class="card my-5" >
		  <img src="potyag2.jpg" class="card-img-top" alt="Тут повинен був бути поїзд">
		  <div class="card-body">
			<h5 class="card-title">ПОТЯГИ</h5>
			<p class="card-text">На сторінці цій ви побачите усю інформацю про потяги та зможете редагувати інформацію </p>
			<a href="trains.php" class="btn btn-primary">Перейти до сторінки</a>
		  </div>
		</div>
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
// } -->
//$cashier = mysqli_fetch_assoc($result);
//print_r($cashier);
//echo "<br>";

//$cashier = mysqli_fetch_assoc($result);
//print_r($cashier);
//echo "<br>";
//echo $cashier['cashier_name'];

//?>