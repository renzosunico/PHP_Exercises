<html>
	<head> <title>Here Documents</title> </head>

	<body>

	<?php
	echo "Here Documents allows multiline strings in variable.<br/>";

	$clerihew = <<<EndOfQuote
Sir Humphrey Davy
Abominated gravy.
He lived in the odium
Of having discovered sodium.
EndOfQuote;

	echo '$clerihew = <<< EndOfQuote' . "<br/>";
	echo $clerihew . "<br/>";
	echo 'echo $clerihew	:	';
	echo $clerihew;

	echo "<br/><br/>Single Quotes and Double Quotes are taken as it is in Here Documents.<br/>";

    $dialogue = <<<NoMore
"It's not going to happen!" she fumed.
He raised an eyebrow. "Want to bet?"
NoMore;

	echo '$dialogue = <<< NoMore' . "<br/>";
	echo $dialogue;

	echo "<br/>" . 'echo $dialogue	:	' . "<br/>";
	echo $dialogue;

	echo "<br/><br/>Whitespace is preserved.<br/>";
	$ws = <<<Enough
boo
hoo
Enough;

	echo '$ws = <<< Enough' . "<br/>";
	echo $ws;
	echo "<br/>" .'echo $ws	:	';
	echo $ws;

	?>

	</body>
</html>
