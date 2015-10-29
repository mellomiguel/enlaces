<?php

if($_REQUEST){
	# host | user | password | database | port
	$mysqli = new mysqli('mysql.hostinger.es' , 'u226935810_mello', 'corneto69', 'u226935810_visit');

	if(!$mysqli) {
		die ("<h3>Error Conecting to MysQl</h3>");
	}
	
	$origen = $_GET['o'];
	$destino = $_GET['d'];
	$query = "INSERT INTO recuento VALUES($origen ,$destino)";

	$result = $mysqli->query($query); 
	
}

switch ($_GET['d']) {

	case 'deviantart':
			header('Location: http://www.deviantart.com/browse/whatshot/');
		break;
	
	case 'elmundo':
			header('Location: http://www.elmundo.es/');	
		break;

	case 'youtube':
			header('Location: https://www.youtube.com/');	
	break;

	case 'diariodeibiza':
			header('Location: http://www.diariodeibiza.es/');
		break;

	case 'github':
			header('Location: https://github.com/');	
		break;
}

?>