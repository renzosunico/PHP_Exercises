<?php

class ResourceFactory implements JsonSerializable
{
	static public function authorFromJson($jsondata)
	{
		$author = new Author($jsondata['id']);
		$author->name = $jsondata['name'];
		
		foreach ($jsondata['books'] as $bookIdentifier) {
			$this->books[] = new Book($bookIdentifier);
		}
		
		return $author;
	}
	
	static public function bookFromJson($jsonData)
	{
		$book = new Book($jsonData['id']);
		$book->name = $jsonData['name'];
		$book->edition = (int)$jsonData['edition'];
		
		return $book;
	}
}