<?php
require('vendor/autoload.php');

use App\Producto;
use Money\Money;

$precio = Money::ARS(9560);
$producto = new Producto($precio);

echo "El precio del producto es: " . $producto->getPrecio()->getCurrency() . $producto->getPrecio()->getAmount() / 100 . PHP_EOL;