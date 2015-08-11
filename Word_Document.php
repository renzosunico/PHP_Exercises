<?php
	$word = new com("word.application") or die("Unable to start Word app");
	echo "Found and Loaded Word, version {$word->Version}<br />";
	
	$word->Documents->add();
	
	$word->Selection->typeText("Hello World");
	$word->Documents[1]->saveAs("php_test.doc");
	
	$word->quit();
	
	$word=null;
	
	echo "all done!";
	
	?>