
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
				.container2 {
                 display: flex;
                  justify-content: center;
                align-items: center;
                }
				.container3 {
                 
				 margin-left: 10px;
  				 margin-right: 10px;
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
        <a class="nav-link active" href="mashenistu.php">Машиністи</a>
		<a class="nav-link" href="cashier.php">Касири</a>
        <a class="nav-link" href="dispetchers.php">Диспетчери</a>
		<a class="nav-link" href="pasagiri.php">Пасажири</a>
		<a class="nav-link" href="tiket.php">Квитки</a>
		<a class="nav-link " href="trains.php">Потяги</a>
        <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
      </div>
    </div>
  </div>
</nav>
<div class="container text-center , containerr ">
		    <div class="row">

				<div class="col-lg-6 mx-auto">

					<img class= "rounded-img " src="masinist.jpg" alt="картинки не будет блєт"/>
					<h1 >МАШИНІСТИ</h1>
					<h2>Ви доєдналися до таблиці машиніст</h2>
					<div class="container">

						<p class="lead text-muted col-lg-6 mx-auto">тут ви можете редагувати та змінбвати данні таблиці Driver </p>
					</div>
					
					
				</div>
			</div>
			<a href="all.php" >
	
				<button  type="button" class="btn btn-primary">Головне меню</button>
			</a>
		</div>
		<p>
		<div class="container2 col-lg-6 mx-auto">
		<div class="container3">
			
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
	  <?php
	  $result = mysqli_query($link,"SELECT * FROM `driver`");

	  if ($result) {
		  
		  while ($row = mysqli_fetch_array($result)) {
			  
			  if ($row['driver_id'] == 1) {
				  echo "Номер машиніста: " . $row['driver_id'] . str_repeat(" ",1);
				  echo "Стаж роботи: " . $row['expiriens_work']. str_repeat(" ",1);
				  echo "Номер поїзда: " . $row['dispatcher_id'] . str_repeat(" ",1);
				  echo "Ім'я машиніста: " . $row['name'] . str_repeat(" ",1);
				  
			  } else {
				  
				  echo "<br>";
				  echo "Номер машиніста: " . $row['driver_id'] . str_repeat(" ",1);
				  echo "Стаж роботи: " . $row['expiriens_work']. str_repeat(" ",1);
				  echo "Номер поїзда: " . $row['dispatcher_id'] . str_repeat(" ",1);
				  echo "Ім'я машиніста: " . $row['name'] . str_repeat(" ",1);
			  }
		  }
	  } else {
		  
		  echo "Помилка: " . mysqli_error($link);
	  }


?>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body"><?php
echo "<br>";	
$result = mysqli_query($link,"SELECT * FROM `driver`");

while($driver = mysqli_fetch_assoc($result))
{
	echo $driver['name'];
	echo "<br>";
}
?>

      </div>
	  
    </div>
	
	
  </div>
  
  </div>
<div class="container container4">
<h1>Додавання данних</h1>
  
  <form action="add_mashenist.php" method="post">
  <div class="card">
    <div class="card-header">
      Додавання даних
    </div>
    <div class="card-body">
      <!-- <div class="mb-3">
        <label for="driver_id" class="form-label">ID машиніста</label>
        <input type="text" class="form-control" id="driver_id" name="driver_id" placeholder="ID машиніста">
      </div> -->
      <div class="mb-3">
        <label for="expiriens_work" class="form-label">Стаж роботи</label>
        <input type="text" class="form-control" id="expiriens_work" name="expiriens_work" pattern="/d*" placeholder="Стаж роботи">
      </div>
      <div class="mb-3">
        <label for="dispather_id" class="form-label">ID диспетчира</label>
        <input type="text" class="form-control" id="dispatcher_id" name="dispatcher_id" placeholder="ID диспетчира">
      </div>
    <div class="mb-3">
        <label for="name" class="form-label">Імя</label>
        <input type="text" class="form-control" id="name" name="name" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" placeholder="Імя">
      </div>
      <button type="submit" class="btn btn-primary">Додати</button>
    </div>
  </div>
</form>

<h1>Редагування данних</h1>
  <form action="edit_mashenistu.php" method="post">
  <div class="card">
    <div class="card-header">
      Редагування даних
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label for="driver_id" class="form-label">ID машиніста</label>
        <input type="text" class="form-control" id="driver_id" name="driver_id" placeholder="ID машиніста">
      </div>
      <div class="mb-3">
        <label for="expiriens_work" class="form-label">Стаж роботи</label>
        <input type="text" class="form-control" id="expiriens_work" name="expiriens_work" pattern="/d*" placeholder="Стаж роботи">
      </div>
      <div class="mb-3">
        <label for="dispather_id" class="form-label">ID диспетчира</label>
        <input type="text" class="form-control" id="dispatcher_id" name="dispatcher_id" placeholder="ID диспетчира">
      </div>
    <div class="mb-3">
        <label for="name" class="form-label">Імя</label>
        <input type="text" class="form-control" id="name" name="name" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" placeholder="Імя">
      </div>
      <button type="submit" class="btn btn-primary">Редагувати</button>
    </div>
  </div>
</form>

  
  <h1>Видалення</h1>
  <form action="delete_mashenistu.php" method="post">
  <div class="card">
    <div class="card-header">
      Видалення
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label for="driver_id" class="form-label">ID машиніста</label>
        <input type="text" class="form-control" id="driver_id" name="driver_id" placeholder="ID машиніста">
      </div>
      <button type="submit" class="btn btn-danger">Видалити</button>
    </div>
  </div>
</form>
</div>
  </body>


</html>
<?php
echo "<br>";	
// $result = mysqli_query($link,"SELECT * FROM `train`");


// while($train = mysqli_fetch_assoc($result))
// {
// 	echo $train['type'];
// 	echo "<br>";
// }

//$cashier = mysqli_fetch_assoc($result);
//print_r($cashier);
//echo "<br>";

//$cashier = mysqli_fetch_assoc($result);
//print_r($cashier);
//echo "<br>";
//echo $cashier['cashier_name'];

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список касирів</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }

        /* .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            background-color: #fff;
        }

        th {
            background-color: #f2f2f2;
        }

        .car.expanded {
            background-color: #f0f0f0;
        }

        .hidden {
            display: none;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>

    <script>
        function toggleDetails(carId) {
            var carDetails = document.getElementById('car_' + carId);
            carDetails.classList.toggle('expanded');
        }

        function toggleCarsVisibility() {
            var cars = document.getElementsByClassName('car');
            for (var i = 0; i < cars.length; i++) {
                cars[i].classList.toggle('hidden');
            }

            var button = document.getElementById('toggleButton');
            button.textContent = (button.textContent === 'Показати ') ? 'Сховати ' : 'Показати ';
        }
    </script>
</head>
<body>
    <h1>Список Машиністів</h1>
    
        <button id="toggleButton" onclick="toggleCarsVisibility()">Показати всіх машиністів</button>

        <table>
            <thead>
                <tr>
                    <th>Еомер машмніста</th>
                    <th>Стаж роботи</th>
                    <th>Номер діспетчера</th>
                    <th>Ініціали</th>
              
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($link, "SELECT * FROM driver");

                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr class='car hidden' id='car_" . $row['id'] . "'>";
                        echo "<td>" . $row['driver_id'] . "</td>";
                        echo "<td>" . $row['expiriens_work'] . "</td>";
                        echo "<td>" . $row['dispatcher_id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                       
                    }
                } else {
                    echo "Помилка: " . mysqli_error($link);
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
