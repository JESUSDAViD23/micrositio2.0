<?php
include("./arreglo.php");
include("./cifradoXD.php");
require("../conexion.php");
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telef'];
$domicilio = $_POST['domic'];
$identificacion =$_POST['ident'];
$cadena =$_POST['contra'];



$contra_encript = encript($cadena);
$identificacion = encript($identificacion);
$domicilio = encript($domicilio);
$sql = "INSERT INTO `pers`(`nombre`, `correo`, `telefono`, `domicilio`, `identificacion`, `passencript`, `contra`) VALUES
 ('$nombre','$email','$telefono','$domicilio','$identificacion','$contra_encript','$cadena')";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location: http://localhost/micro/PERS/PERS.php");
}else{
    header("Location: http://localhost/micro/PERS/PERS.php");
}




?>
