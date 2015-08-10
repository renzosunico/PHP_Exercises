<html>
<head>
	<title>My Library</title>
</head>

<body>
<?php 
class Booklist
{
	const FIELD_TYPE_SINGLE = 1;
	const FIELD_TYPE_ARRAY = 2;
	const FIELD_TYPE_CONTAINER = 3;
	
	var $parser;
	var $record;
	var $currentField = '';
	var $fieldType;
	var $endsRecord;
	var $records;
	
	function __construct($filename)
	{
		$this->parser = xml_parser_create();
		xml_set_object($this->parser, &$this);
		xml_set_element_handler($this->parser, "elementStarted", "elementEnded");
		xml_set_character_data_handler($this->parser, "handleCdata");
		
		$this->fieldType = array (
		'title' => self::FIELD_TYPE_SINGLE,
		'author' => self::FIELD_TYPE_ARRAY,
		'isbn' => self::FIELD_TYPE_SINGLE,
		'comment' => self::FIELD_TYPE_SINGLE
		);
		
		$this->endsRecord = array('book' => true);
		
		$xml = join('', file($filename));
		xml_parse($this->parser, $xml);
		xml_parser_free($this->parser);
	}
	
	function elementStarted($parser, $element, &$attributes)
	{
		$element = strtolower($element);
		
		if($this->fieldType[$element] != 0) {
			$this->currentField = $element;
		}
		else {
			$this->currentField = '';
		}
	}
	
	function elementEnded($parser, $element)
	{
		$element = strtolower($element);
		
		if($this->endsRecord[$element]) {
			$this->records[] = $this->record;
			$this->record = array();
		}
		
		$this->currentField='';
	}
	
	function handleCdata($parser, $text)
	{
		if($this->fieldType[$this->currentField] == self::FIELD_TYPE_SINGLE) {
			$this->record[$this->currentField][] .= $text;
		}
		else if($this->fieldType[$this->currentField] == self::FIELD_TYPE_ARRAY) {
			$this->record[$this->currentField][] = $text;
		}
	}
	
	function showMenu()
	{
		echo "<table><br>";
		
		foreach ($this->records as $book) {
			echo "<tr>";
			echo "<th> <a href=\"{$_SERVER['PHP_SELF']}?isbn={$book['isbn']}\"> {$book['title'] }</a></th>";
			echo "<td>" . join(', ', $book['author']) . "</td><br>";
			echo "</tr><br>";
		}
		
		echo "</table><br>";
	}
	
	function showBook($isbn)
	{
		foreach ($this->records as $book) {
			if($book['isbn'] !== $isbn) {
				continue;
			}
			
			echo "<p><b>{$book['title']}</b> by " . join(', ', $book['author']) . "<br />";
			echo "ISBN: {$book['isbn']}<br />";
			echo "Comment: {$book['comment']}</p><br />";
		}
		
		echo "<p> Back to the <a href=\"{$_SERVER['PHP_SELF']}\">list of books</a>.</p>";
	}
}

	$library = new Booklist("books.xml");
	if( isset($_GET['isbn'])) {
		$library->showBook($_GET['isbn']);
	}
	else {
		$library->showMenu();
	} ?>
</body>
</html>