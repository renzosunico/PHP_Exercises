<html>
	<head> <title>Searching</title> </head>

	<body>

	<?php
            $record = "Fred, Flintstone, 35, Wilma";
            $pos = strrpos($record, ',');
            echo ("The last command in the record is at position {$pos}.<br/>");
            echo "The rest after first comma " . strstr($record, ',') . ".<br/>";
            echo "The rest after last comma " . strrchr($record, ',') . ".<br/>";

            function isOctal($str) {
                
                return strspn($str, '01234567') == strlen($str);
                
            }
            echo "Is this \"65651321354\" octal? ";
            var_dump(isOctal("65651321354")) . "<br/>";

            function hasBadChars($str)
            {
                return strcspn($str, "\n\t\0") != strlen($str);
            }

            echo "<br/>Does \"\n\t\0\" contain special characters? ";
            var_dump(hasBadChars("\n\t\0"));

            $bits = parse_url("http://me:secret@example.com/cgi-bin/board?user=fred");
            echo "<br/>";
            print_r($bits);
            
	?>

	</body>
    
</html>
