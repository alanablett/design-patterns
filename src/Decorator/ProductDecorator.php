<?php namespace Pattern\Decorator;

abstract class ProductDecorator implements Product {
	
	protected $product;
	
	public function __construct($product)
	{
		$this->product = $product;
	}
	
}