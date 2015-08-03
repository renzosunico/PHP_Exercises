<html>
	<head> <title> Comparing Strings </title> </head>

	<body>

	<?php
		echo "Comparing strings using double equal and tripple equal and Identical operator.<br/>";
		$o1 = 3;
		$o2 = "3";
        echo "Given that \$o1 = 3 and \$o2 = \"3\"<br/>";

		if($o1 == $o2) {
			echo "== returns true<br/>";
		}
		else if($o1 === $o2) {
			echo "=== returns true<br/>";
		}

        echo "<br/>Comparing strings using comparison operators.<br/>";
        $him = "Fred";
        $her = "Wilma";

        echo "Given that \$him=\"Fred\" and \$her=\"Wilma\".<br/>";

        if ($him < $her) {
            print "{$him} comes before {$her} in the alphabet.<br/>";
        }

        echo "<br/>Comparing a string and a number using comparison operator.<br/>";
        echo "Given  that \$string = \"PHP Rocks\" amd \$number = 5.<br/>";
        $string = "PHP Rocks";
        $number = 5;

        if ($string < $number) {
            echo "<br/>$string < $number";
        }

        echo "<br/><br/> Using strcmp function to compare two variables using string type. <br/>";
        $n = strcmp($string, $number);
        echo "Using the same value given to \$string and \$number:        $n";

        echo "<br/><br/> Approximate Equality, comparing how similar two strings are when pronounced.<br/>Using soundex function:<br/>.";
        $known = "Fred";
        $query = "Phred";
        echo "Given that known=Fred and query=Phred";
        
        if (soundex($known) == soundex($query)) {
            print "soundex: {$known} sounds like {$query}<br/>";
        }
        else {
            print "soundex: {$known} doens't sound like {$query}<br/>";
        }

        echo "<br/>Using metaphone:<br/>";

        if (metaphone($known) == metaphone($query)) {
                print "metaphone: {$known} sounds like {$query}<br/>";
        }
        else {
            print "metaphone: {$known} doesn't sound like {$query}<br/>";
        }

        echo "<br/> Comparing two strings based on similar characters.";
        $string1 = "Rasmus Lerdorf";
        $string2 = "Razmus Lehdorf";
        $common = similar_text($string1, $string2, $percent);
        echo "<br/>Given that string1=Rasmus Lerdorf and string2=Razmus Lehdorf. <br/>";
        printf("They have %d chars in common (%2.1f%%).", $common, $percent);
	?>

	</body>
</html>
