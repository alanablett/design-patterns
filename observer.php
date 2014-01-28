<?php

require 'vendor/autoload.php';

// Create the subject
$product = new Pattern\Observer\Product();
// Create the observer
$emailer = new Pattern\Observer\ProductEmailer($product);
// Fire some event
$product->setSomeNewData();