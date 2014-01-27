<?php namespace Pattern\Strategy;

class QuickSort implements Sorter {
	
	public function sort($books)
	{
		echo 'Quick sorting algorithm here???';
		return asort($books);
	}
	
}