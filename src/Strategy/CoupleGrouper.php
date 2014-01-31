<?php namespace Pattern\Strategy;

class CoupleGrouper implements Grouper {
	
	public function group($books)
	{
		return array_chunk($books, 2);
	}
	
}