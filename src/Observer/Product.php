<?php namespace Pattern\Observer;

class Product implements Subject {
	
	protected $data;
	protected $observers;
	
	public function __construct()
	{
		$this->data = array('some', 'product', 'data');
		$this->observers = array();
	}
	
	public function setSomeNewData()
	{
		array_push($this->data, 'new stuff');
		$this->notifyObservers();
	}
	
	public function registerObserver(Observer $o)
	{
		if( ! in_array($o, $this->observers) )
			$this->observers[] = $o;
	}
	
	public function removeObserver(Observer $o)
	{
		if ( ($key = array_search($o, $this->observers) ) !== false)
			unset($this->observers[$key]);
	}
	
	public function notifyObservers()
	{
		foreach($this->observers as $observer)
		{
			$observer->update($this->data);
		}
	}
	
}