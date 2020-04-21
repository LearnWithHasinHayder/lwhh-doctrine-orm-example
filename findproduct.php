<?php

use Shop\Model\Product;

require "bootstrap.php";

$productRepository = $entityManager->getRepository(Product::class);
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s %d\n", $product->getName(), $product->getId());
}