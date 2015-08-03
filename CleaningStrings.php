<html>
	<head> <title>Cleaning Strings </title> </head>

	<body>

	<?php

		echo 'trim(), ltrim() and rtrim() is used to remove unecessary whitespaces.' . "<br/><br/>";
		$title = "           Programming PHP      	\t\t";
		echo 'echo trim($title)	:	';
        echo trim($title);

        echo "<br/><br/>" . 'echo ltrim($title)	:	';
        echo ltrim($title);

        echo "<br/><br/>" . 'echo rtrim($title)	:	';
        echo rtrim($title);

	?>

	</body>
</html>
