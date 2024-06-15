<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
    if ((!isset($_POST['producto'])) || 
        (!isset($_POST['cantidad'])) ||  
        (!isset($_POST['valor'])) || 
        (!isset($_POST['modelo'])))
    { 
        $error = "*" . "Todos los campos son requeridos"; 
    } 
    else
    { 
        $producto = $_POST['producto']; 
        $cantidad = $_POST['cantidad']; 
        $valor = $_POST['valor']; 
        $modelo = $_POST['modelo'];
    }
}; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Productos</title>
</head>
<body>
     <table class="table-of-products">
     <thead class="table-heading"> 
     <tr class="row-of-headers"> 
     <th> Nombre </th>
     <th> Cantidad </th>
     <th> Valor </th>
     <th> Modelo </th>
     </tr>
     </thead>
     <tbody class="table-body"> 
     <tr class="row-of-body"> 
     <td> <?= $producto ?> </td>
     <td><?= $cantidad ?> </td>
     <td><?=  $valor ?></td>
     <td><?=  $modelo ?></td>
     <td class="eliminar-producto"><a href="">Eliminar un producto</a></td>
     <td class="actualizar-producto"><a href="">Actualizar un producto</a></td>
     </tr>
     <a class="agregar-producto" href="./formulario.php">Ingresar un producto nuevo</a>
     </tbody>
     </table>
    
</body>
</html>