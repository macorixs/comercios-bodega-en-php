<?php
include('conexion.php');

$venta = $_POST['venta'];
$producto = $_POST['producto'];
$codigo = $_POST['codigo'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$descuento = $_POST['descuento'];
$total = $_POST['total'];



$query ="INSERT INTO datos(venta , producto , codigo , cantidad , precio , descuento , total) VALUES('$venta' , '$producto' , '$codigo' , '$cantidad' , '$precio' , '$descuento' , '$total')";
$resultados = $conexion->query($query);


if($resultados){
    header('location: bodega.php');
}

else{
    echo "insercion no exitoza";
}


?>