<html>
	<head> <title> Printing Strings </title> </head>

	<body>

	<?php

		echo "Printing strings using echo. <br/>";
		echo 'echo "Printy"	:	';
		echo "Printy";

		echo "<br/><br/>" . 'echo ("Printy")	:	';
		echo ("Printy");

        echo "<br/><br/>" . 'echo "First", "second", "third"	:	';
        echo "First", "second", "third";

		echo "<br/><br/>Printing strings using print()f:<br/>";
		echo "printf('%.2f', 27.452) : ";
		printf('%.2f', 27.452);

		echo "<br/><br/>Printing strings using print_r(). <br/>";
		$a = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');
		echo 'print_r($a)	:	';
		print_r($a);

		echo "<br/><br/>Printing strings using var_dump(), used for debugging.<br/>";
		echo "echo var_dump(true):	";
		var_dump(true);

	?>

	</body>
</html>
