<?php

include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];

$sql="UPDATE ubers SET  nombre='$nombre',paterno='$paterno', materno='$materno', correo='$correo', direccion='$direccion' WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ubers.php");
    }
?>

