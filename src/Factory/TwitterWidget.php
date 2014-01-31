<?php namespace Pattern\Factory;

class TwitterWidget extends Widget {
	
	public function __construct()
	{
		$this->title = 'Twitter Widget';
		$this->markup = '<h3>Some markup different for twitter</h3>';
	}
	
}