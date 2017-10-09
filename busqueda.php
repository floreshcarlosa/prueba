<?php 
require "devuelve_productos.php";
$productos=new devuelve_productos();
$array_productos=$productos->get_productos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Busqueda_POO</title>
</head>
<body>
<?php
foreach($array_productos as $elemento) {
        echo $elemento["codigo"] . " ";
        echo $elemento["nombre"] . " ";
        echo $elemento["precio"] . " ";
        echo $elemento["pais"] . " <br>";
}
 
    
    
   
    ?>
    
</body>
</html>