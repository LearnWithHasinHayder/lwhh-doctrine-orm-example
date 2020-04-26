<?php

use Shop\Model\User;

require "bootstrap.php";
$usersRepo = $entityManager->getRepository(User::class);
$users = $usersRepo->findAll();
foreach($users as $user){
    echo "User Name: ".$user->getName().PHP_EOL;
    $products = $user->getProducts();
    foreach( $products as $product){
        echo sprintf("-%s\n", $product->getName());
    }
    echo "=========\n\n";
}