<?php

require 'vendor/autoload.php';

$computer = new Pattern\Decorator\Computer('iMac', 899.99);
var_dump($computer->getName());
var_dump($computer->getPrice());

$computer = new Pattern\Decorator\MouseDecorator($computer);
var_dump($computer->getName());
var_dump($computer->getPrice());