<?php

if($_REQUEST){

	$mysqli = new mysqli('mysql.hostinger.es' , 'u226935810_mello', 'miguel', 'u226935810_visit' , 3306);
	//$mysqli = new mysqli('localhost' , 'root', '', 'visits');

	if(!$mysqli || $msqli->connect_errno) {
		die ("<h3>Error Conecting to MysQl</h3>");
	}
	
	$origen = $_GET['o'];
	$destino = $_GET['d'];
	$query = "INSERT INTO recuento(origen,destino) VALUES('$origen' , '$destino');";

	$result = $mysqli->query($query); 
	
}

header('Location: http://'.$_GET["d"]);
exit;

?>