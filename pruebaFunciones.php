<?php 

function agregarProducto($nombre, $cantidad, $valor, $modelo) {
    $productos = [ 
        'nombre' => $nombre, 
        'cantidad' => $cantidad, 
        'valor' => $valor, 
        'modelo' => $modelo ];

        // array_push($arrOfProducts, $productos);
        // return $arrOfProducts;
        return $productos;
    }

function buscarProdPorModelo($modelo, $productos) {
    $claveModelo = array_search($modelo, $productos);
    if ($claveModelo) {
        return array_values($productos);
    };
    return "No se encontró el modelo";
  
}
function mostrarProds($productos) {
    if ($productos) {
        return $productos;
    };
    return "No hay productos";
}

$productos = agregarProducto('Coupe',3, 1300, 'BMW');

// print_r(buscarProdPorModelo('BNW',$productos));
print_r(mostrarProds($productos));
?>