<?php
// Namespaces - https://www.php.net/manual/en/language.namespaces.php
// Used for easier managing of classes and files. In large systems you often have classes named the same to keep consistency.
// If we are sticking to conventions, and naming files by class names: example Class Product is in Product.php file,
// two Product.php filenames cannot co-exist in the same directory.

// We need to include files that contain classes and namespace declaration
require 'Inchoo/Catalog/Product.php';
require 'Magento/Catalog/Product.php';

// by using Use we read "namespace" declared in included/required files
use \Inchoo\Catalog\Product as InchooProduct;
use \Magento\Catalog\Product as MagentoProduct;

// by defining namespace in Inchoo\Catalog\Product we cannot use new Product() anymore although it is used.
//$product = new Product(); // Fatal error:  Uncaught Error: Class 'Product' not found in ...

// Full path
$product = new \Inchoo\Catalog\Product();
echo $product->getType();

echo "<br/>";

$product = new \Magento\Catalog\Product();
echo $product->getType();

echo "<br/>";
echo "<br/>";
echo "<br/>";
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

echo "<br/>";

$product = new MagentoProduct();
echo $product->getType();

// Namespaces can be used with abstract classes and interfaces the same way (when you need to implement them).

// Must use full use path for instantiating classes using strings
var_dump(class_exists('\Inchoo\Catalog\Product'));
var_dump(class_exists('InchooProduct'));

// Task: Create 3 classes with same name but different namespaces in 3 different directories.
// Each class must have one function getName which will return string that contains its namespace (you can hardcode it)
// Create index.php file in which you will instantiate those classes and output getName function for each.

// Task2: In the same directory as those classes create interfaces that those classes will extend,
// implement getName and setName functions in interface and classes

// Task3, try instantiating a class using a string variable in index.php