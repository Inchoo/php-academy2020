<?php

use \Inchoo\Catalog\Product as InchooProduct;
use \Magento\Catalog\Product as MagentoProduct;

include '../00_functions.php';
require 'Inchoo/Catalog/Product.php';
require 'Magento/Catalog/Product.php';


//$product = new Product(); Fatal error:  Uncaught Error: Class 'Product' not found in ...
$product = new \Inchoo\Catalog\Product();
echo $product->getType();

$product = new \Magento\Catalog\Product();
echo $product->getType();

/*
 * use \Inchoo\Catalog\Product;
 * $product = new Product();
 * echo $product->getType();
 */

/*
 * use \Inchoo\Catalog\Product as InchooProduct;
 * use \Inchoo\Catalog\Product as MagentoProduct;
 */
$product = new InchooProduct();
echo $product->getType();

$product = new MagentoProduct();
echo $product->getType();