<?php
include('conexion.php');
?>
<DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
<meta charset="UTF-8">

<head>
	<title class="title">Registro</title>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
	<form  method="POST">
        <div class="form">
            <h2 class="menu5">Únete a nuestro equipo</h2>
            <div class="grupo menu7">
            	<input type="text" name="nombre" id="" size="25" MAXLENGHT="15" required><span class="barra"></span>
                <label>Nombre Completo</label>
            </div>
            <div class="grupo menu7">
                <input type="text" name="edad" size="25" MAXLENGHT="15" id="" required><span class="barra"></span>
                <label>Edad</label>
            </div>
            <div class="grupo menu7">
                <input type="email" name="correo" size="25" MAXLENGHT="15" id="" required><span class="barra"></span>
                <label>Correo Electrónico</label>
            </div>
            <div class="grupo menu7">
                <input type="text" name="telefono" size="25" MAXLENGHT="15" id="" required><span class="barra"></span>
                <label>Teléfono</label>
            </div>
            <div class="grupo menu7">
                <input type="text" name="direccion" size="25" MAXLENGHT="15" id="" required><span class="barra"></span>
                <label>Dirección</label>
            </div>
            <div class="grupo menu7">
                <input type="text" name="estudios" size="25" MAXLENGHT="15" id="" required><span class="barra"></span>
                <label>Estudios</label>
            </div>
            <div class="grupo menu7">
                <input type="text" name="ocupacion" size="25" MAXLENGHT="15" id="" required><span class="barra"></span>
                <label>Ocupación</label>
            </div>
            <p align="right"><input class="redondo menu7"  type="submit" value="Guardar" name="Guardar" /></p>
        </div>
        <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja1"></div>
        </div>
    </form>

</div>
</body>

<?php
error_reporting(E_ERROR);
$guar=$_POST['Guardar'];

if ($guar==TRUE) {
$nombre =$_POST['nombre'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$estudios=$_POST['estudios'];
$ocupacion=$_POST['ocupacion'];



$sql="INSERT INTO voluntarios (nombre,edad,correo,telefono,direccion,estudios,ocupacion) VALUES ('$nombre','$edad','$correo','$telefono','$direccion','$estudios','$ocupacion')";


if (mysqli_query($conn,$sql)) 

{
    echo'<script language="javascript">alert("Tu registro fue exitoso");window.location.href="about.html"</script>';
   


}

else {

    echo "lo sentimos, algo anda mal";

}
}
?>
