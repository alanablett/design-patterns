<?php namespace Pattern\Strategy;

class Library {
	
	public $books;
	protected $sorter;
	protected $grouper;
	
	public function __construct(Sorter $sorter, Grouper $grouper)
	{
		$this->books = array('book title 1', 'another book', 'third one');
		$this->sorter = $sorter;
		$this->grouper = $grouper;
	}
	
	public function getBooks()
	{
		return $this->books;
	}
	
	public function organiseBooks()
	{
		$this->sorter->sort($this->books);
		$this->books = $this->grouper->group($this->books);
	}
	
}