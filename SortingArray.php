<html>
	<head> <title>Sorting</title> </head>

	<body>

	<?php

            //ascending order
            $names = array("Cath", "Angela", "Brad", "Mira");
            sort($names);

            //descending order
            rsort($names);

            //sorting an associative arrays
            $logins = array(
                'nit' => 415,
                'kt'  => 492,
                'rl'  => 652,
                'jht' => 441,
                'ji'  => 441,
                'wt'  => 402,
                'hut' => 309 );

            arsort($logins);

            //multi array sorting
            $names = array("Tom", "Dick", "Harriet", "Brenda", "Joe");
            $ages = array(25, 35, 29, 35, 35);
            $zips = array(802522, '02140', 90210, 64141, 80522);

            array_multisort($ages, SORT_ASC, $zips, SORT_DESC, $names, SORT_ASC);
            
            for ($i=0; $i < count($names); $i++) {
                    echo "{$names[$i]}, {$ages[$i]}, {$zips[$i]} <br />";
            }


            //flipping an array
            $dir = array(
                    'gnat' => "/home/staff/nathan",
                    'frank' => "/home/action/frank",
                    'petermarc' => "/home/staff/petermark",
                    'ktatroe' => "/home/staff/kevin" );

            $dir = array_flip($dir);
            print_r($dir);

            //breakline
            echo "<br />";

            //shuffling an array
            $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
            shuffle($days);
            print_r($days);

	?>

	</body>
</html>
