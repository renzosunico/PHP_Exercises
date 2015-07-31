<html>
	<head>
		<title> Sample Function </title>
	</head>

	<body>

	<?php

		$array = array("really long string here, boy", "this", "middling length", "larger");
		$sortOption = "random";

		function sortNonrandom($array)
		{

			$sortOption = false;
			usort($array, function($a, $b) use($sortOption)
			{
				if ($sortOption == "random") {
				return rand(0, 2) - 1;
				}
				else {
				return strlen($a) - strlen($b);
				}
			});
			return $array;
		}

	?>
		Original:
	<?php	print_r($array); ?>
		</br>
		Sorted:
	<?php	print_r(sortNonrandom($array)); ?>

	</body>

</html>
