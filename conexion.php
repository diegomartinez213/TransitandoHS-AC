<?php
		$servername="localhost:3306";
        $username="transita_transitandoAC";
        $password="Q]p@9}uZ]nSb";
        $database="transita_THS";
    
      
    //iniciamos la conexion 


    $conn=mysqli_connect($servername,$username,$password,$database);
    
    //se revisa la conexion

    if ($conn->connect_error) {
        die("lo sentimos no hay conexion ".mysqli_connect_error());
    }
    
?>

