<?php namespace Pattern\Observer;

class ProductEmailer implements Observer {
	
	public function __construct(Subject $product)
	{
		$product->registerObserver($this);
	}
	
	public function update($data)
	{
		echo 'I just saw the product got updated. Here is its data';
		var_dump($data);
	}
	
}