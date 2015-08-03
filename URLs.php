<html>
	<head> <title>URLs </title> </head>

	<body>

	<?php
		$name = "Programming PHP";
		echo "RFC 3986 Encoding.<br/>";

		echo 'echo "http://localhost/{rawurlencode($name)}"	:      ';
		echo "http://localhost/" . rawurlencode($name);

		echo "<br/><br/>RFC 3986 Decoding.<br/>";
		$encoded = 'Programming%20PHP';

		echo "\$encoded = 'Programming%20PHP';";
		echo "<br/> echo rawurldecode(\$encoded);	:	";
		echo rawurldecode($encoded);

		echo "<br/><br/>Query-string encoding.<br/>";
		$baseUrl = 'http://www.google.com/q=';

		echo "\$baseUrl = 'http://www.google.com/q=';<br/>";
		echo $baseUrl . urlencode('PHP sessions -cookies');
	?>

	</body>
</html>
