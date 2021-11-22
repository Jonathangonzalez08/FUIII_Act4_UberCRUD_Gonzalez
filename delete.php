<?php

include("conexion.php");
$con=conectar();

$idempleado=$_GET['idempleado'];

$sql="DELETE FROM chofer  WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: chofer.php");
    }
?>

