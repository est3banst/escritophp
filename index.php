
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Productos</title>
</head>
<body>
    <?php 
    include "./procesamiento.php";
    ?>
     <table>
     <thead> 
     <tr> 
     <th> Nombre </th>
     <th> Cantidad </th>
     <th> Valor </th>
     <th> Modelo </th>
     </tr>
     </thead>
     <tbody> 
     <tr> 
     <td> <?= $producto ?> </td>
 
     <td><?= $cantidad ?> </td>
 
     <td><?=  $valor ?></td>
 
     <td><?=  $modelo ?></td>
     </tr>
     </tbody>
     </table>
    
</body>
</html>