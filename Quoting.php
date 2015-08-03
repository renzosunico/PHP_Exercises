<html>
	<head> <title> QuotingS String Constants </title> </head>

	<body>
	<?php

	$who = 'Kilroy';
	$where = 'here';
	echo "Variable Interpolation enclosed with Double Strings:<br/>";
	echo 'echo $who was $where	:	';
	echo "$who was $where";

	$n = 12;
	echo "<br/><br/>To surround variable with strings enclose it with curly braces {$n}th:<br/>";
	echo 'echo You are the {n}th person	:	';
	echo "You are the {$n}th person";

	$name = 'Fred';
	$str = 'Hello, $name';
	echo "<br/><br/>Variable Interpolation to strings enclosed with Single Quotes:<br/>";
	echo 'echo $str	:	';
	echo $str;

	?>
	</body>

</html>
