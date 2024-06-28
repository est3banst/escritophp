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
    $listaProd = [];
    foreach ($productos as $producto) {
     array_push($listaProd ,$producto);
    }
    return $listaProd;
    
}

function actualizarProducto($arrOfProducts, $pos, $nombre, $cantidad, $valor, $modelo) {
        $arrOfProducts[$pos] = [ 
            'nombre' => $nombre,
            'cantidad' => $cantidad,
            'valor' => $valor, 
            'modelo' => $modelo
        ];
    
return $arrOfProducts;
}

function valorTotal($inventario, $valor) { 
    $total = 0;
    foreach ($inventario as $producto) {
        $total += $producto['valor'];
    }
    return $total;
}

function filtrarValores ($inventario, $valorMaximo) {
    foreach ($inventario as $producto) {
        if ($producto['valor'] >= $valorMaximo) {
            return array_values($producto);
        }
    }
}
function mostrarModsDisponibles ($inventario) {
    $arrEjemplo = [];
    foreach ($inventario as $producto) {
        array_push($arrEjemplo, $producto['modelo']);
    }
    return $arrEjemplo;
}

function calcPromedio($inventario) {
    $total = 0;
    foreach ($inventario as $producto) {
        $total += $producto['valor'];
    }
    $subtotal = $total / count($inventario);
    return 'El promedio es: $'.number_format($subtotal, 2);
}

$arrOfProducts = [];

// Agregar Productos
// array_push($arrOfProducts, agregarProducto('BJX', 8, 876, 'Bicicleta'), agregarProducto('Saveiro', 5, 630, 'Volkswagen'), agregarProducto('K300', 5, 3200, 'Lamborghini'));
// Buscar por modelos
// var_dump($arrOfProducts);
// print_r(buscarProdPorModelo('BNW',$productos));

//Actualizar producto
// print_r(actualizarProducto($arrOfProducts, 2, 'Camaro', 6, 930, 'Chevrolet'));
// Calcular el valor total de los productos
// print_r(valorTotal($arrOfProducts, 'valor'));
// Filtrar productos por productos mayores a un valor
// print_r(filtrarValores($arrOfProducts, 3000));
// Mostrar todos los productos
// print_r(mostrarProds($arrOfProducts));
// Mostrar todos los modelos disponibles
// print_r(mostrarModsDisponibles($arrOfProducts));
//Calcular el promedio de todos los valores de los productos 
// print_r(calcPromedio($arrOfProducts));

?>