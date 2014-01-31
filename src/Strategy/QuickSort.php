<?php namespace Pattern\Strategy;

class QuickSort implements Sorter {
	
	public function sort(&$books)
	{
		natsort($books);
	}
	
}