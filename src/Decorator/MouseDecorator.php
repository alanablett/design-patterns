<?php namespace Pattern\Decorator;

class MouseDecorator extends ProductDecorator {
	
	public function getName()
	{
		return $this->product->getName() . ' with a mouse';
	}
	
	public function getPrice()
	{
		return $this->product->getPrice() + 29.99;
	}
	
}