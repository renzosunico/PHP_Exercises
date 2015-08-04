<html>
	<head> <title>Regular Expression</title> </head>

	<body>

	<?php
     
            echo preg_match("/^cow/", "Dave was a cowhand.") . "<br/>";
            echo preg_match("/^cow/", "cowabunga!") . "<br/>";
            echo preg_match("/cow$/", "Dave was a cowhand.") . "<br/>";
            echo preg_match("/cow$/", "Don't have a cow") . "<br/>";
            echo preg_match("/c.t/", "cat") . "<br/>";
            echo preg_match("/c.t/", "bat"). "<br/>";
            echo preg_match("/\\$5\.00/", "Your bill is $5.00 exactly.") . "<br/>";
            echo preg_match("/$5.00/", "Your bill is $5.00 exactly.") . "<br/>";
            echo preg_match("/c[aeiou]t/", "I cut my hand.") . "<br/>";
            echo preg_match("/c[aeiou]t/", "What cart?") . "<br/>";
            echo preg_match("/c[^aeiou]t/", "I cut my hand.") . "<br/>";
            echo preg_match("/c[^aeiou]t/", "What cart?") . "<br/>";
            echo preg_match("/[a-zA-Z]!/", "11!") . "<br/>";
            echo preg_match("/[a-zA-Z]!/", "stop!") . "<br/>";
            echo preg_match("/cat|dog/", "the cat rubbed my legs") . "<br/>";
            echo preg_match("/cat|dog/", "the dog rubbed my legs") . "<br/>";
            echo preg_match("/^([a-z]|[0-9])/", "jumped over") . "<br/>";
            echo preg_match("/^([a-z]|[0-9])/", "Lazy dogs") . "<br/>";
            echo preg_match("/ca+t/", "caaaaaaaaaaat") . "<br/>";
            echo preg_match("/ca*t/", "ct") . "<br/>";
            echo preg_match("/ca?t/", "cat") . "<br/>";
            echo preg_match("/a (very )+big dog/", "it was a very very big dog") . "<br/>";
            echo preg_match("/^(cat|dog)$/", "cat") . "<br/>";
            echo preg_match("/([0-9]+)/", "You have 42 magic beans", $captured) . "<br/>";
            print_r($captured);
            echo "<br/>" . preg_match("#/usr/local/#", "/usr/local/bin/perl") . "<br/>"; //different delimiter for pattern"
            echo preg_match("/\/usr\/local\//", "/usr/local/bin/perl")  . "<br/>";
            echo preg_match("/is (.*)$/", "the key is in my pants", $captured) . "<br/>";
            print_r($captured);
        /*    echo preg_match("/[[:<:]]gun[[:>:]]/", "the Burgundy exploded") . "<br/>";    */
            echo "<br/>" . preg_match("/(<.*?>)/", "do <b> not </b> press the button", $matches) . "<br/>";
            print_r($matches);
            echo "<br/>" . preg_match("/(<[^>]*>)/", "do <b> not </b> press the button", $matches) . "<br/>";
            print_r($matches);
            echo "<br/>" . preg_match("/(?:ello)(.*)/", "jello biafra", $match) . "<br/>";
            print_r($match);
            echo "<br/>" . preg_match("/([[:alpha:]]+)\s+\1/", "Paris in the the spring", $match) . "<br/>";
            print_r($match);
            echo "<br/>" . preg_match("/I like (?i:PHP)/", "I like pHp") . "<br/>";     
            echo preg_match("/(?-i:I like) PHP/i", "I like pHp") . "<br/>";

            $input = <<<END
name = 'Tim O\' Reilly';
END;
            $pattern = <<<END
'   #opening quote
(   #begin capture
.*? # the string
(?<! \\\\) #skip escaped quotes
)
;
END;
        echo preg_match( "/$pattern/x", $input, $match);
        print_r($match);
        echo "<br/>" . preg_replace('/<.*?>/', '!', 'do <b>not</b> press the button') . "<br/>";
        $contractions = array("/don't/i", "/won't/i", "/can't/i");
        $expansions = array('do not', 'will not', 'can not');
        $string = "Please don't yell-I can't jump while you won't speak";
        $longer = preg_replace($contractions, $expansions, $string);
        echo $longer;

        echo "<br/>" . preg_quote('$5.00 (five bucks)') . "<br/>";
            
	?> 

	</body>
</html>