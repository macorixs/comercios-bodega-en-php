<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bodega de new york</title>
</head>
<body>
 <form action = "consulta.php" method = "post">
<h2 class = "sistemas">sistema de venta de la bodega de new york</h2>
<div class = "container">
<input type = "text"  required="venta" name="venta" placeholder= "venta">
<input type = "text"  required="producto" name="producto" placeholder= "producto">
<input type = "code"  required="codigo" name="codigo" placeholder= "codigo">
<input type = "text"  required="cantidad" name="cantidad" placeholder= "cantidad">
<input type = "text"  required="precio" name="precio" placeholder= "precio">
<input type = "text"  required="descuento" name="descuento" placeholder= "descuento">
<input type = "text"  required="total" name="total" placeholder= "total">
<input type = "submit" src ="ticket.php" class = "boton" value="venta">
<input type = "reset" class = "botton" value="limpiar">

</div>
 </form> 
 <center>
   <form action = "bodega.php" method = "post">
   <h3>central de la bodega de new york<h3> 
<table class = "tabla" border = "1" bgcolor = "yellow">
<thead>
   <tr>
<th colspan = "1"><a href = ""></a></th>
<th colspan = "9">lista de los producto en venta</th>

</tr>
 
  
</thead>
<tbody>
<td  width = "120px;">id</td>
<td width = "120px;">venta</td>
<td width = "120px;">producto</td>
<td width = "120px;">codigo</td>
<td width = "120px;">cantidad</td>
<td width = "120px;">precio</td>
<td width = "120px;">descuento</td>
<td width = "120px;">total</td>



<?php
include('conexion.php');

$query = "SELECT * FROM `datos`";
$resultados = $conexion->query($query);
while($row = $resultados->fetch_assoc()){




?>  
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['venta']; ?></td>
<td><?php echo $row['producto']; ?></td>
<td><?php echo $row['codigo']; ?></td>
<td><?php echo $row['cantidad']; ?></td>
<td><?php echo $row['precio']; ?></td>
<td><?php echo $row['descuento']; ?></td>
<td><?php echo $row['total']; }?></td>


</tr>









</tbody>

</table>

</form> 
</center>
<input type="button" src="ticket.php" name="imprimir" value="Imprimir tickets" onclick = "window.print()">
<?php
include('conexion.php');
if($conexion){
   echo "el producto no existe";
}

else{
   echo " el producto ya existe";
}


?>
</body>
</html>






















