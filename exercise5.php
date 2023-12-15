<?php

class Product {

    public function __construct(
        public string $name,
        public int $price,
        public string $description
    ) {}

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setPrice(int $price) {
        $this->price = $price;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }
}

$product1 = new Product('iPhone 12', 2000, 'A powerful phone');
$product2 = new Product('iPhone 12 Pro', 3000, 'A more powerful phone');

echo "Name of Product 1: " . $product1->getName();
echo "<br>";
echo "Name of Product 2: " . $product2->getName();

$product1->setName("iPhone 13");
echo "<br>";
echo "Name of Product 1 after modification: " . $product1->getName();

?>