<html>
	<head> <title>Decomposing Strings</title> </head>

	<body>

	<?php
            echo "Using explode() to separate tokens of string to array.<br/><br/>";
            $input = 'Fred, 25, Wilma';
            echo "\$input = 'Fred, 25, Wilma'<br/>";
            echo "\$fields = explode(',',\$input);<br/>";
            $fields = explode(',',$input);
            print_r($fields);
            
            echo "<br/><br/>Using implode() to contain array in single string.<br/>";
            echo "echo implode(',',\$fields);<br/>";
            echo implode(',',$fields);

            echo "<br/><br/> Tokenizing <br/>";
            echo "\$token=strtok(\$string, ',');<br/>";
            $string = "Fred, Flintstone, 35, Wilma";
            $token=strtok($string, ',');
            
            while($token != false)
            {
                echo $token . "<br/>";
                $token=strtok(",");
            }

            echo "<br/>Using sscanf() to decompose string according to printf().<br/><br/>";
            $string = "Fred\tFlintstone (35)";
            echo "\$string = \"Fred\\tFlintstone (35)\"<br>";
            $a = sscanf($string, "%s\t%s (%d)");
            echo "\$a = sscanf(\$string, \"%s\\t%s (%d)\");<br/>";
            print_r($a);

            echo "<br/><br/>Using fields to handle tokens instead of array.<br/><br/>";
            $n = sscanf($string, "%s\t%s (%d)", $first, $last, $age);
            echo "\$n = sscanf(\$string, \"%s\\t%s (%d)\", \$first, \$last, \$age);<br/>";
            echo "Matched {$n} fields: {$first} {$last} is {$age} years old.";

            
	?>

	</body>
</html>
