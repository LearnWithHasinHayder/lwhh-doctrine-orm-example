<?php 
use Shop\Model\Product;

require "bootstrap.php";

$productRepository = $entityManager->getRepository(Product::class);
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s %d Entry By: %s\n", 
    $product->getName(),
    $product->getId(),
    $product->getUser()->getName()
    );
}