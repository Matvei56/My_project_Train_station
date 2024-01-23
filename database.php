<?php
require "libs/rb.php";
$server = "127.0.0.1";
$login ="root";
$pass ="";
$name_db = "train_station";

$link = mysqli_connect($server, $login, $pass, $name_db);
R::setup( 'mysql:host=localhost;dbname=train_station',
'root', '' );
if ($link == False)
{
	echo "Звязку немає";
}
session_start();

?>	