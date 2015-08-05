<html>
	<head> <title>Acting or Entire Arrays</title> </head>

	<body>

	<?php
            $scores = array(98, 76, 56, 80);

            //Calculating the sum of array
            echo "The sum of array \$scores: ". array_sum($scores); ".<br/>";

            //breakline
            echo "<br/>";

            //merging arrays
            $first = array("hello", "world");
            $second = array("exit", "here");
            print_r(array_merge($first, $second));

            //breakline
            echo "<br/>";

            //finding the difference of two arrays
            print_r(array_diff($first, $second));

            function isOdd($element)
            {
                return $element % 2;
            };

            //breakline
            echo "<br/>";

            $numbers = array(9, 23, 24, 27);
            print_r(array_filter($numbers, isOdd));

            //breakline
            echo "<br/>";

            //union two arrays
            function array_union($a, $b) {
                $union = array_merge($a, $b);
                $union = array_unique($union);
                
                return $union;
            }

            $first = array(1, "two", 3);
            $second = array("one", "two", "three");
            print_r(array_union($first, $second));

            //breakline
            echo "<br/>";

	?>

	</body>
</html>
