<html>
	<head> <title>Changing String Case </title> </head>

	<body>

	<?php
		$string="FRED flinstone";

		echo 'Uses strtolower(), strtoupper(), ucfirst(), ucwords().' . "<br/><br/>";

		echo '$string="FRED flinstone";' . "<br/>";
		echo 'print(strtolower($string))	:	';
		print(strtolower($string) . "<br/>");

		echo '<br/>$string="FRED flinstone' . "<br/>";
                echo 'print(strtoupper($string))        :       ';
                print(strtoupper($string) . "<br/>");

		echo '<br/>$string="FRED flinstone' . "<br/>";
                echo 'print(ucfirst($string))        :       ';
                print(ucfirst($string) . "<br/>");

		echo '<br/>$string="FRED flinstone' . "<br/>";
                echo 'print(ucwords($string))        :       ';
                print(ucwords($string) . "<br/>");

	?>

	</body>
</html>
