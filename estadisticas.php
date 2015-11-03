<?php


if($_REQUEST){

	//$mysqli = new mysqli('mysql.hostinger.es' , 'u226935810_mello', 'miguel', 'u226935810_visit');
	$mysqli = new mysqli('localhost' , 'root', '', 'visits');

	if(!$mysqli || $msqli->connect_errno) {
		die ("<h3>Error Conecting to MysQl</h3>");
	}
	
	/*$origen = $_GET['o'];
	$destino = $_GET['d'];
	*/

	$query1 = "SELECT COUNT(destino) AS visitas FROM recuento WHERE destino = 'www.deviantart.com/browse/whatshot/' ";

	$result1 = $mysqli->query($query1); 
	//-----------------------------------------------

	$query2 = "SELECT COUNT(destino) AS visitas FROM recuento WHERE destino = 'www.elmundo.es/' ";

	$result2 = $mysqli->query($query2); 
	//-----------------------------------------------

	$query3 = "SELECT COUNT(destino) AS visitas FROM recuento WHERE destino = 'www.youtube.com/' ";

	$result3 = $mysqli->query($query3); 
	//-----------------------------------------------

	$query4 = "SELECT COUNT(destino) AS visitas FROM recuento WHERE destino = 'www.diariodeibiza.es/' ";

	$result4 = $mysqli->query($query4); 

	//-----------------------------------------------
	$query5 = "SELECT COUNT(destino) AS visitas FROM recuento WHERE destino = 'www.marca.com/' ";

	$result5 = $mysqli->query($query5); 

	echo $result1;
	echo $result2;
	echo $result3;
	echo $result4;
	echo $result5;

}



?>