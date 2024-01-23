
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
        <a class="nav-link " href="mashenistu.php">Машиністи</a>
		<a class="nav-link " href="cashier.php">Касири</a>
        <a class="nav-link" href="dispetchers.php">Диспетчери</a>
		<a class="nav-link " href="pasagiri.php">Пасажири</a>
		<a class="nav-link active" href="tiket.php">Квитки</a>
		<a class="nav-link " href="trains.php">Потяги</a>
        <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
      </div>
    </div>
  </div>
</nav>
<div class="container text-center , containerr ">
		    <div class="row">

				<div class="col-lg-6 mx-auto">

					<img class= "rounded-img " src="ticet.webp" alt="картинки не будет блєт"/>
					<h1 >КВИТКИ</h1>
					<h2>Ви доєдналися до таблиці квитки</h2>
					<div class="container">

						<p class="lead text-muted col-lg-6 mx-auto">тут ви можете редагувати та змінбвати данні таблиці Tickets </p>
					</div>
					
					
				</div>
			</div>
			<a href="all.php" >
	
				<button  type="button" class="btn btn-primary">Головне меню</button>
			</a>
		</div>
		<div class="container2 col-lg-6 mx-auto">
		<p>
		<div class="container3">

			<!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Показати усі данні</a> -->
		</div>
  <!-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Усі дати на які придбані квитки</button>
  --></div> 
  <!-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Розкрти всі поля</button> -->
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
	  <?php
	  $result = mysqli_query($link,"SELECT * FROM `tickets`");

	  if ($result) {
		  
		  while ($row = mysqli_fetch_array($result)) {
			  
			  if ($row['tickets_id'] == 1) {
				  echo "Номер квитка: " . $row['tickets_id'] . str_repeat(" ",1);
				  echo "Номер пасажира: " . $row['passenger_id']. str_repeat(" ",1);
				  echo "Дата реєстрації квитка: " . $row['order_date'] . str_repeat(" ",1);
				  echo "Номер потягу: " . $row['train_id'] . str_repeat(" ",1);
				  echo "Тип квитка: " . $row['type_tickets'] . str_repeat(" ",1);
				  echo "Номер касира: " . $row['cashier_id'] . str_repeat(" ",1);
				  
			  } else {
				  
				  echo "<br>";
				  echo "Номер квитка: " . $row['tickets_id'] . str_repeat(" ",1);
				  echo "Номер пасажира: " . $row['passenger_id']. str_repeat(" ",1);
				  echo "Дата реєстрації квитка: " . $row['order_date'] . str_repeat(" ",1);
				  echo "Номер потягу: " . $row['train_id'] . str_repeat(" ",1);
				  echo "Тип квитка: " . $row['type_tickets'] . str_repeat(" ",1);
				  echo "Номер касира: " . $row['cashier_id'] . str_repeat(" ",1);
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
$result = mysqli_query($link,"SELECT * FROM `tickets`");

while($tickets = mysqli_fetch_assoc($result))
{
	echo $tickets['order_date'];
	echo "<br>";
}
?>

      </div>
	  
    </div>
	
	
  </div>
  
  </div>
<div class="container container4">
<h1>Додавання данних</h1>
  
  <form action="add_tickets.php" method="post">
  <div class="card">
    <div class="card-header">
      Додавання даних
    </div>
    <div class="card-body">
      <!-- <div class="mb-3">
        <label for="tickets_id" class="form-label">ID білету</label>
        <input type="text" class="form-control" id="tickets_id" name="tickets_id" placeholder="ID білету">
      </div> -->
      <div class="mb-3">
        <label for="passenger_id" class="form-label">ID пасажира</label>
        <input type="text" class="form-control" id="passenger_id" name="passenger_id" placeholder="ID пасажира">
      </div>
    <div class="mb-3">
        <label for="order_date" class="form-label">Дата замовленння</label>
        <input type="date" class="form-control" id="order_date" name="order_date" placeholder="Дата замовленння">
      </div>
      <div class="mb-3">
        <label for="train_id" class="form-label">ID потяга</label>
        <input type="text" class="form-control" id="train_id" name="train_id" placeholder="ID потяга">
      </div>
    <div class="mb-3">
        <label for="type_tickets" class="form-label">Тип квитка</label>
        <select class="form-control" id="type_tickets" name="type_tickets">
        <option value="Дитячий">Дитячий</option>
        <option value="Дорослий">Дорослий</option>
          </select>
      </div>
    <div class="mb-3">
        <label for="cashier_id" class="form-label">ID касира</label>
        <input type="text" class="form-control" id="cashier_id" name="cashier_id" placeholder="ID касира">
      </div>
      <button type="submit" class="btn btn-primary">Додати</button>
    </div>
  </div>
</form>

<h1>Редагування данних</h1>
  <form action="edit_tickets.php" method="post">
  <div class="card">
    <div class="card-header">
      Редагування даних
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label for="tickets_id" class="form-label">ID білету</label>
        <input type="text" class="form-control" id="tickets_id" name="tickets_id" placeholder="ID білету">
      </div>
      <div class="mb-3">
        <label for="passenger_id" class="form-label">ID пасажира</label>
        <input type="text" class="form-control" id="passenger_id" name="passenger_id" placeholder="ID пасажира">
      </div>
    <div class="mb-3">
        <label for="order_date" class="form-label">Дата замовленння</label>
        <input type="date" class="form-control" id="order_date" name="order_date" placeholder="Дата замовленння">
      </div>
      <div class="mb-3">
        <label for="train_id" class="form-label">ID потяга</label>
        <input type="text" class="form-control" id="train_id" name="train_id" placeholder="ID потяга">
      </div>
    <div class="mb-3">
        <label for="type_tickets" class="form-label">Тип квитка</label>
        <select class="form-control" id="type_tickets" name="type_tickets">
        <option value="Дитячий">Дитячий</option>
        <option value="Дорослий">Дорослий</option>
          </select>
      </div>
    <div class="mb-3">
        <label for="cashier_id" class="form-label">ID касира</label>
        <input type="text" class="form-control" id="cashier_id" name="cashier_id" placeholder="ID касира">
      </div>
      <button type="submit" class="btn btn-primary">Редагувати</button>
    </div>
  </div>
</form>

  
  <h1>Видалення</h1>
  <form action="delete_tickets.php" method="post">
  <div class="card">
    <div class="card-header">
      Видалення
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label for="tickets_id" class="form-label">ID білету</label>
        <input type="text" class="form-control" id="tickets_id" name="tickets_id" placeholder="ID білету">
      </div>
      <button type="submit" class="btn btn-danger">Видалити</button>
    </div>
  </div>
</form>
</div>
  </body>
	

</html>
<?php
// echo "<br>";	
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

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список Квитків</title>
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
    <h1>Список Квитків</h1>
    
        <button id="toggleButton" onclick="toggleCarsVisibility()">Показати всі квитки </button>

        <table>
            <thead>
                <tr>
                    <th>Номер квитка</th>
                    <th>Номер пасажира</th>
                    <th>Дата оформлення</th>
                    <th>Номер поїзду</th>
                    <th>Тип квитка</th>
                    <th>Номер касиру</th>
              
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($link, "SELECT * FROM tickets");

                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr class='car hidden' id='car_" . $row['id'] . "'>";
                        echo "<td>" . $row['tickets_id'] . "</td>";
                        echo "<td>" . $row['passenger_id'] . "</td>";
                        echo "<td>" . $row['order_date'] . "</td>";
                        echo "<td>" . $row['train_id'] . "</td>";
                        echo "<td>" . $row['type_tickets'] . "</td>";
                        echo "<td>" . $row['cashier_id'] . "</td>";
                       
                    }
                } else {
                    echo "Помилка: " . mysqli_error($link);
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

</html>