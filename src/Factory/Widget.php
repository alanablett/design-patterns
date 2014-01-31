<?php namespace Pattern\Factory;

abstract class Widget {
	
	protected $title = 'Default widget title';
	protected $markup = '<div>Default markup</div>';
	
	public function render()
	{
		print $this->getTitle();
		print $this->getMarkup();
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getMarkup()
	{
		return $this->markup;
	}
	
}