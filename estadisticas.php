
<!DOCTYPE html>
<html>
<head>
	<title>Stadistics</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
  
    <link href="Styles/bootstrap.min.css" rel="stylesheet">
    <script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>

	<style type="text/css">
	    body{
	      padding-top: 20px;
	      background-color: #8F0000;
	    }

	    table{
	    	color: #FFFFFF;
	    }
 	</style>
</head>
<body>
<div class="container">
		<div style="background: #299CFF" class="jumbotron">
        <div class="container" style="text-align:center">
          <h1>ESTADISTICAS</h1>
       	</div>
       	</div>

       		<table class="table">
       		<tr>
       		<th>Pagina</th>
       		<th>Visitas</th>
       		<th>Porcentaje</th>
       		</tr>


<?php

	$mysqli = new mysqli('mysql.hostinger.es' , 'u226935810_mello', 'miguel', 'u226935810_visit' , 3306);
	//$mysqli = new mysqli('localhost' , 'root', '', 'visits');

	$query1 = "SELECT destino, COUNT(*) AS visits, (COUNT(*)*100)/(SELECT COUNT(*) FROM recuento) AS pocentaje FROM recuento GROUP BY origen,destino";

	$numvisites = $mysqli->query($query1); 

	while($row = $numvisites->fetch_array(MYSQLI_BOTH)){
		echo "<tr><td>".$row["destino"]."</td><td>".$row["visits"]."</td><td>".$row["pocentaje"]."</td></tr>";
		}

?>
		</table>
      	
</div>

</body>
</html>







