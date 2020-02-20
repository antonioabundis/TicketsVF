<?php

	/*Datos de conexion a la base de datos*/
	define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
	define('DB_USER', 'root');//Usuario de tu base de datos
	define('DB_PASS', '');//Contraseña del usuario de la base de datos
	define('DB_NAME', 'ticketly');//Nombre de la base de datos

	$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        @die("<h2 style='text-align:center'>Imposible conectarse a la base de datos! </h2>".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        @die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
<?php 
//Declaración de variables de conexión

$host='localhost'; //dirección IP  de la BD
$user='root';//usuario de la conexión a la BD
$pass= '';//contraseña del usuario de la conexión
$bd = 'inventario';//nombre de la BD

//creación de la conexión de BD
$conexion = new mysqli($host,$user,$pass,$bd);

//Validadmos que la conexión sea correcta
if($conexion->connect_errno){
	echo "ERROR:".$conexion->connect_error."<br>";
}
 ?>