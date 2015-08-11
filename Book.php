<?php

class Book
{
	public $id;
	public $name;
	public $edition;
	
	public function __construct($id)
	{
		$this->id = $id;
	}
}