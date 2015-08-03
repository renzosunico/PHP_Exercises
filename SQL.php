<html>
	<head> <title>SQL </title> </head>

	<body>

	<?php
		$string = "\"It's never going to work, \" she cried, as she hit the backslash (\) key.";
		echo "\$string = \"It's never going to work, \" she cried, as she hit the backslash (\) key.;" . "<br/>";
		echo 'echo addslashes($string);	:	';
		echo addslashes($string);

	?>

	</body>
</html>
