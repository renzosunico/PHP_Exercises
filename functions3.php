<html>
	<head>
		<title> Sample Function </title>
	</head>

	<body>
		<?php
			function counter()
			{
				static $count = 0;
				return $count++;
			}

			for ($i = 1; $i <= 5; $i++) {
				print counter() . "<br>";
			}
		?>

	</body>

</html>
