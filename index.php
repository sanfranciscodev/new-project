<?php
require('vendor/autoload.php');

use App\Producto;
use Money\Money;

$precio = Money::ARS(95.60);

$producto = new Producto($precio);

echo "El precio del producto es: " . $producto->getPrecio()->getCurrency() . $producto->getPrecio()->getAmount() . PHP_EOL;