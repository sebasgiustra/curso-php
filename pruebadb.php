<?php
$host="localhost";
$dbuser="root";
$dbpass="seba1980";
$dbname="pruebas";


// POR PROCEDIMIENTO
/**/

$conexion =  mysqli_connect($host,$dbuser,$dbpass);	

		// PUEDE LLEVAR O NO $dbname
		// Si no lleva DBNAME hay que especificarla en mysqli_select_db

if (mysqli_connect_errno()) {
	echo "Ha habido un error en ".mysqli_connect_errno();
	exit();
}

mysqli_select_db($conexion,$dbname) or die("No se encuentra la base de datos");
mysqli_set_charset($conexion,"utf8");


$consulta = "SELECT * FROM datosusuarios";
$resultados = mysqli_query($conexion, $consulta);



// O BIEN while (($fila=mysqli_fetch_row($resultados))==true) {
	while ($fila=mysqli_fetch_row($resultados)) {
	echo $fila[0]." ";
	echo $fila[1]." ";
	echo $fila[2]." ";
	echo $fila[3];
	echo "<br>";
	
}

mysqli_close($conexion);







?>