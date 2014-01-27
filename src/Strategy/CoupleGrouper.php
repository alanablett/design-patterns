<?php namespace Pattern\Strategy;

class CoupleGrouper implements Grouper {
	
	public function group($books)
	{
		echo 'Couple grouping algorithm here';
		return array_chunk($books, 2);
	}
	
}