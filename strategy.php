<?php

require 'vendor/autoload.php';

$library = new Pattern\Strategy\Library(new Pattern\Strategy\QuickSort(), new Pattern\Strategy\CoupleGrouper());
var_dump($library->getBooks());

$library->organiseBooks();
var_dump($library->getBooks());