<html>
	<head>
		<title> Sample Function </title>
	</head>

	<body>
	<?php
		function takesTwo($a, $b)
		{
			if (isset($a)) {
				echo " a is set";
			}
			if (isset($b)) {
				echo " b is set";
			}
		}
		echo "With two arguments:"; ?>
		</br>
	<?php	takesTwo(1, 2);		    ?>
		</br>
	<?php	echo "With one argument:";  ?>
		</br>
	<?php	takesTwo(1); 		    ?>

	</body>

</html>
