<html>
	<head> <title>Substring</title> </head>

	<body>

	<?php
            echo "Using substr function in getting substring of string.<br/>";
            echo "Given that name=Fred Flintstone.<br/>";

            $name = "Fred Flintstone";
            echo "Getting substring of name from character 6 and length = 4: " . substr($name, 6, 4);

            echo "<br/><br/>Getting substring of name from character 11 and so on: " . substr($name, 11);

            $sketch = <<<Sketch
Well, there's egg and bacon; egg sausage and nacon; egg and spam and spam;
egg bacon and spam; egg bacon sausage and spam; spam bacon sausage and spam;
spam egg bacon and spam; spam sausage spam spam bacon spam tomato and spam;
Sketch;

            echo "<br/><br/>Getting count of occurrence of word using substr_count function: <br/><br/>";
            echo $sketch . "<br/><br/>";
            print ("The word spam occurs " . substr_count($sketch, "spam") . " times.<br/>");

            echo "<br/>Replacing and inserting words using substring_replace function.<br/><br/>";
            echo "Given greeting=good morning citizen, character at position 5-7 will be replaced with bye.<br/>";
            $greeting = "good morining citizen";
            $farewell = substr_replace($greeting, "bye", 5, 8);
            echo "Replaced: $farewell";

            echo "<br/><br/>Insert without deleting. Using 0 as length. <br/>";
            echo "Insert kind from farewell at position 9: ";
            echo substr_replace($farewell, "kind", 9, 0);

            echo "<br/><br/>Replacing without inserting. Using \"\"<br/>";
            echo "Insert \"\" from farewell at position 8: ";
            echo substr_replace($farewell, "", 8);
            
            echo "<br/><br/>Insert substring at the beginning of the string.<br/>";
            echo substr_replace($farewell, "now it's okay to say ", 0, 0);

            echo "<br/><br/>Other String Functions.<br/><br/>";
            echo "Reversing characters from string using strrev function.";
            echo "echo strrev(\"There is no cabal.\"); : " . strrev("There is no cabal") . ".<br/>";

            echo "<br/><br/>Repeating specific string without having to loop using str_repeat function.<br/><br/>";
            echo "echo str_repeat('*', 50); : <br/>";
            echo str_repeat('*', 50) . "<br/>";

            echo "<br/>Padding string.<br/><br/>";
            $string_pad = str_pad('Fred Flinstone', 30);
            echo "\$string_pad = str_pad('Fred Flinstone', 30);<br/>";
            echo "echo \"{\$string_pad}:35:Wilma\"<br/>";
            echo "{$string_pad}:35:Wilma";
	?>

	</body>
</html>
