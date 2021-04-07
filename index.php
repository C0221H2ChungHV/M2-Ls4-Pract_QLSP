<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Laptop", 10));
$productManager->add(new Product("Mobile", 20));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo ($product->getName() ." gia ".$product->getPrice()."<br/>");
}