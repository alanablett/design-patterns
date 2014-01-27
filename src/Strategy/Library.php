<?php namespace Pattern\Strategy;

class Library {
	
	protected $books;
	protected $sorter;
	protected $grouper;
	
	public function __construct(Sorter $sorter, Grouper $grouper)
	{
		$this->books = array('book title 1', 'another book', 'third one');
		$this->sorter = $sorter;
		$this->grouper = $grouper;
	}
	
	public function organiseBooks()
	{
		$this->sorter->sort($this->books);
		$this->books = $this->grouper->group($this->books);
		return $this->books;
	}
	
}