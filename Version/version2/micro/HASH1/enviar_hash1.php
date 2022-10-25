<?php
require("../conexion.php");
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telef'];
$domicilio = $_POST['domic'];
$identificacion =$_POST['ident'];
$contrase =$_POST['contra'];

$contra_encript = MD5($contrase);

$sql = "INSERT INTO `hash1`(`nombre`, `correo`, `telefono`, `domicilio`, `identificacion`, `passencript`, `contra`) VALUES
 ('$nombre','$email','$telefono','$domicilio','$identificacion','$contra_encript','$contrase')";

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$result = mysqli_query($conn,$sql);
if($result){
    alert("Datos guardados");
    header("Location: https://micrositio20200750.ticsgrupob.com/micro/HASH1/HASH1.php");
}else{
    alert("Datos no guardados");
    header("Location: https://micrositio20200750.ticsgrupob.com/micro/HASH1/HASH1.php");
}

?>