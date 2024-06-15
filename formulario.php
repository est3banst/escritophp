<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario de productos</title>
</head>
<body>
    <form action="./procesamiento.php" method="post">
        <label for="producto">Nombre del producto</label>
        <input type="text" id="producto" name="producto">
        <label for="cantidad">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad">
        <label for="valor">Valor</label>
        <input type="number" id="valor" name="valor">
        <label for="modelo">Modelo</label>
        <input type="text" id="modelo" name="modelo">
        <button type="submit">Agregar producto</button>
    </form>
</body>
</html>