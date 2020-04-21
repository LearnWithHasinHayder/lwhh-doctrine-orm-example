<?php

use Shop\Model\Product;

require "bootstrap.php";

$newProductName = "GPU 4GB";

$product = new Product;
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
