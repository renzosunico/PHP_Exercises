<html>
	<head> <title>Arrays</title> </head>

	<body>

	<?php
            echo $addresses[0];
            echo $addresses;

            //Indexed array
            $addresses[0] = "spam@cyberpromo.net";
            $addresses[1] = "abuse@example.com";
            $addresses[2] = "root@example.com";
            echo $addresses;

            //Indexed array shortcut
            $addresses = array("spam@cyberpromo.net", "abuse@example.com", "root@example.com");

            //Associative Array
            $price['gasket'] = 15.29;
            $price['wheel'] = 75.25;
            $price['tire'] = 50.00;

            //Alternative, shortcut
        /*  $days = ['gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.0];  */

            
            //Create an emopty array
            $addresses = array();

            //Initialize an index and automatically increment
            $days = array(1 => "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");

            //Using range to create a range of index
            $numbers = range(0, 100);   //Creates array with index from 0 to 101

            //Returns the size of array $numbers
            echo "<br/>" . count($numbers);

            //Padding an array
            $scores = array(5, 10);              //new array
            $padded = array_pad($scores, 5, 0);  //copy values of scores to new padded with minimum of 5 elements
            $padded = array_pad($scores, -5, 0); //copy values of scores in reverse order with minimum of 5 elements

            //multidimensional array
            $row0 = array(1,2,3);
            $row1 = array(4,5,6);
            $row2 = array(7,8,9);
            $multi = array($row0, $row1, $row2);

            //copy array values to fields
            $person = array("Fred", 35, "Betty");
            list($name, $age, $wife) = $person;

            //slicing an array
            $people = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
            $middle = array_slice($people, 2, 2);

            //array chunks dividing array to equal size
            $nums = range(1,7);
            $rows = array_chunk($nums, 3);

            //getting array keys and saved to array
            $person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
            $keys = array_keys($person);

            //getting the values of array
            $person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
            $keys = array_values($person);

            //check existence of array
            $person['age'] = 0;

            if (array_key_exists('age', $person)) {
                echo "<br/>exists!<br/>";
            }
            
            //checking existence
                
            $a = array(0, NULL, '');
            
            function tf($v)
            {
                return $v ? 'T' : 'F';
            }

            for ($i=0; $i < 4; $i++) {
                printf("%d: %s %s\n", $i, tf(isset($a[$i])), tf(array_key_exists($i, $a)));
                echo "<br/>";
            }

            //removing an elements
            $subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");
            $removed = array_splice($subjects, 2, 3);
            array_splice($subjects, 0, 1);

            //inserting elements
            $new = array("law", "business", "IS");
            array_splice($subjects, 4, 3, $new);

            //insert new elements into the array while pushing existing elements
            $subjects = array("physics", "chem", "math");
            $new = array("law", "business");
            array_splice($subjects, 2, 0, $new);




        
	?>

	</body>
</html>
