<?php

class Author
{
	public $id;
	public $name;
	public $books = array();
	
	public function __construct($id)
	{
		$this->id = $id;
	}
}