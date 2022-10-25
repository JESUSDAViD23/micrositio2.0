<?php
require("../conexion.php");
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telef'];
$domicilio = $_POST['domic'];
$identificacion =$_POST['ident'];
$contrase =$_POST['contra'];

$contra_encript = sha1($contrase);

$sql = "INSERT INTO `hash2`(`nombre`, `correo`, `telefono`, `domicilio`, `identificacion`, `passencript`, `contra`) VALUES
 ('$nombre','$email','$telefono','$domicilio','$identificacion','$contra_encript','$contrase')";

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$result = mysqli_query($conn,$sql);
if($result){
    alert("Datos guardados");
    header("Location: http://localhost/micro/Hash2/hash2.php");
}else{
    alert("Datos no guardados");
    header("Location: http://localhost/micro/Hash2/hash2.php");
}

?>