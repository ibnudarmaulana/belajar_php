<?php

require_once "data/Product.php";

$product = new Product("apple", 10000);

echo $product->getName();

