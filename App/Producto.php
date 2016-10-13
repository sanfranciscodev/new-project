<?php
namespace App;

use Money\Money;

class Producto
{
    /**
     * @var Money
     */
    private $precio;

    public function __construct(Money $precio)
    {
        $this->precio = $precio;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio(Money $precio)
    {
        $this->precio = $precio;
    }
}