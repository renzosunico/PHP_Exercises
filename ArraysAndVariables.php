<html>
	<head> <title>Converting Arrays to Variables</title> </head>

	<body>

	<?php
            //converting array to variable
            $shape = "round";
            $array = array('cover' => "bird", 'shape' => "rectangular");
            extract($array, EXTR_PREFIX_ALL, "book");
            echo "Cover: {$book_cover}, Book Shape: {$book_shape}, Shape: {$shape}";

            //break the line
            echo "<br/>";

            //converting variables to array
            $color = "indigo";
            $shape = "curvy";
            $floppy = "none";
            $a = compact("color", "shape", "floppy");
            print_r($a);            

            echo "<br/>";

            //traversing an array
            $addresses = array("spam@cyberpromo.net", "abuse@example.com");
            foreach ($addresses as $value) {
                echo "Processing {$value}";
                echo "<br/>";
            }

            //alternative foreach
            $person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
            foreach($person as $key => $value) {
                echo "Fred's {$key} is {$value}";
                echo "<br/>";
            }


            //accessing element using each functionality
            reset($addresses);
            while(list($key, $value) = each($addresses)) {
	           echo "{$key} is {$value}<br />";
            }

            //building a table with iterator
            $ages = array(
            'Person' => "Age",
            'Fred' => 35,
            'Barney' => 30,
            'Tigger' => 8,
            'Pooh' => 40);

            reset($ages);
            list($c1, $c2) = each($ages);
            echo("<table> <tr><th>{$c1}</th><th>{$c2}</th></tr><br />");
                
            while (list($c1, $c2) = each($ages)) {
                echo("<table> <tr><td>{$c1}</td><td>{$c2}</td></tr><br />");
            }
                     
            echo("</table><br />");

            //traversing using for loop
            for($i = 0; $i < count($addresses); $i++)  {
                echo "$addresses[$i]";
                echo "<br />";
            }

            //using arraywalk
            function printRowp($value, $key)
            {
                print("<tr><td>{$value}</td><td>{$key}</td></tr>\n");
            }

            array_walk($person, printRowp);

            function printRow($value, $key, $color)
            {
                echo "<tr>\n<td bgcolor=\"{$color}\">{$key}</td>";
                echo "<td bgcolor=\"{$color}\">{$value}</td>\n</tr>\n";
            }
            $person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
            echo "<table border=\"1\">";
            array_walk($person, "printRow", "lightblue");
            echo "</table>";

            //reducing an array
            function addItUp($runningTotal, $currentValue)
            {
                $runningTotal += $currentValue * $currentValue;
                return $runningTotal;
            }

            $numbers = array(2,3,5,7);
            $total = array_reduce($numbers, addItUp);
            echo "<br />" . $total . "<br />";

            //searching for array
            var_dump(in_array("spam@cyberpromo.net", $addresses));
            echo "<br />";
        
            //using array_search to return the key of search
            echo "Fred's " . array_search("Wilma", $person) . " is Wilma.<br />";


	?>

	</body>
</html>
