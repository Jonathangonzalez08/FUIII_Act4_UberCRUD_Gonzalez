<?php
include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombre=$_POST['nombre'];
$paterno=$_POST[' paterno'];
$materno=$_POST[' materno'];
$correo=$_POST['Correo'];
$direccion=$_POST['direccion'];


$sql="INSERT INTO chofer VALUES('$idempleado','$nombre','$paterno','$materno', '$correo', '$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: chofer.php");
    
}else {
}
?>

