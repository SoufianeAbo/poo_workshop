<?php

class Product {
    public $name;
    public $price;
    public $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
}

$product1 = new Product('iPhone 12', 'A powerful phone', 2000);
$product2 = new Product('iPhone 12 Pro', 'A more powerful phone', 3000);

echo "Name of Product 1: " . $product1->name;
echo "<br>";
echo "Name of Product 2: " . $product2->name;

?>