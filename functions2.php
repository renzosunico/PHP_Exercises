<html>
	<head>
		<title> Sample Function </title>
	</head>

	<body>
	<?php
		function doubler($value)
		{
			return $value << 1;
		}

		echo "A pair of 13s is " . doubler(13);
	?>

	</body>

</html>
