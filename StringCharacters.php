<html>
	<head> <title> Accessing Individual Characters</title> </head>

	<body>

	<?php

	$string = 'Hello, world';
	$length = strlen($string);

	echo "Accessing Individual Characters from \$string ${string}.<br/>";
	for($i=0; $i<$length; $i++) {
		printf("The %dth character is %s &#9; <br/>", $i, $string{$i});
	}

	?>

	</body>
</html>
