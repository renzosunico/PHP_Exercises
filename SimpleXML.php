<?php
	$document = simplexml_load_file("books.xml");
	
	foreach ($document->book as $book) {
		echo $book->title . "<br />";
	}
	
	echo "<br /><br />";

	foreach ($document->library->children() as $node) {
		foreach ($node->attributes() as $attribute) {
			echo "{$attribute} <br/>"; 
		}
	}
	
	foreach ($document->children() as $book) {
		$book->title = "New Title";
	}
	
	file_put_contents("books.xml", $document->asXml());
	