<?php namespace Pattern\Strategy;

interface Sorter {
	public function sort(&$books);
}