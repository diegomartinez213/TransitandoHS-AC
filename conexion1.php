<?php
	$servername="localhost";
	$database="ths";
    $username="usuario"; 
    $pass= "12345";        
    
    
    //Iniciamos la conexion
	$conn=mysqli_connect($servername, $database, $username, $pass);
	// Se revisa la conexion
	if (!$conn) {
		die("No hay conexion".mysql_connect_error());
	}
	echo "Si hubo conexion";

$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$estudios=$_POST['estudios'];
$ocupacion=$_POST['ocupacion'];


$sql= "INSERT INTO voluntarios (nombre, edad, correo, telefono, direccion, estudios, ocupacion) VALUES ('$nombre', '$edad', '$correo', '$telefono', '$direccion', '$estudios', '$ocupacion')";
if (mysqli_query($conn, $sql)) {
	echo "Se ingresaron los datos correctamente";
}
else{
	echo "Ocurrio un error";
}



?>
