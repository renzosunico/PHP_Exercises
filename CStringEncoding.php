<html>
	<head> <title>CString Encoding </title> </head>

	<body>

	<?php
		echo "Adding C Slashes. <br/>";
		echo 'echo addcslashes("hello\tworld\n", "\x00..\x1fz\xff");	:	';
		echo addcslashes("hello\tworld\n", "\x00..\x1fz\xff");

		echo "<br/>Removing C Slashes.<br/>";
		echo 'echo stripcslashes("hello\tworld\n");	:	';
		echo stripcslashes('hello\tworld\n');
	?>

	</body>
</html>
