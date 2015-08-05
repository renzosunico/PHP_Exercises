<?php

function displayClasses()
{
    $classes = get_declared_classes();
    
    foreach($classes as $class) {
        echo "Information about $class <br/>";
        echo "Class methods: <br/>";
        
        $methods = get_class_methods($class);
        
        if(!count($methods)) {
            echo "<i>None</i><br />";
        }
        else {
            foreach ($methods as $method) {
                echo "<b> $method </br>()<br/>";
            }
        }
    
        echo "Class Properties:<br/>";
        $properties = get_class_vars($class);
        
        if(!count($properties)) {
            echo "<i>None</i><br />";
        }
        else {
            foreach ($properties as $property) {
                echo "<b> $property </br>()<br/>";
            }
        }
    }
}

displayClasses();
?>