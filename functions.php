<?php

// require MYSQL connection
require('database/DBController.php');

// require Product class
require('database/product.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();
?>