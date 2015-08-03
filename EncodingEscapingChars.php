<meta charset="UTF-8">
<html>
	<head> <title>Encoding and Escaping Characters </title> </head>

	<body>

	<?php

		$string = htmlentities("Einstürzende Neubauten", ENT_COMPAT, "UTF-8");
		echo "Entity-quoting special characters.<br/>";
		echo '$string = htmlentities("Einstürzende Neubauten")	:	';
		echo $string;

		$input = <<<End
"Stop pulling my hair!" Jane's eyes flashed.<p>";
End;

		echo "<br/><br/>" . $input . "<br/>";
		echo 'Applying htmlentities($input):  ';
		echo htmlentities($input, ENT_QUOTES);

		echo "<br/><br/>get_html_translation_table() is used to fetch translation table.<br/>";
		echo 'echo get_html_translation_table(HTML_ENTITIES);	:	';
		echo get_html_translation_table(HTML_ENTITIES);

		echo "<br/><br/>Removing HTML tags.<br/>";
		$input = '<p>Howdy, &quot;Cowboy&quot;';

		echo htmlentities("\$input = '<p>Howdy, &quot;Cowboy&quot;';") . "<br/>";
		echo 'echo strip_tags($input);	:	';
		echo strip_tags($input);

		echo "<br/><br/>Extracting meta tags.<br/>";
		$metatags = get_meta_tags('http://example.com');

		echo "$metatags = get_meta_tags('http://example.com');	:	<br/>";
		echo "Web page made by {$metatags['author']}";


	?>

	</body>
</html>
