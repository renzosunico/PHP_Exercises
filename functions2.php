<html>
	<head>
		<title> Sample Function </title>
	</head>

	<body>
	<?php
		function doubler(&$value)
		{
			 $value = $value << 1;
		}
		$a = 3;
		doubler($a);
		echo $a;
	?>

	</body>

</html>
