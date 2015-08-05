<?php

    function getCallableMethods($object)
    {
        $methods = get_class_methods(get_class($object));
        
        if(get_parent_class($object)) {
            $parent_methods = get_class_methods((get_parent_class($object)));
            $methods = array_diff($methods, $parent_methods);
        }
        
        return $methods;
    }

    function getInheritedMethods($object)
    {
        $methods = get_class_methods(get_class($object));
        
        if(get_parent_class($object)) {
            $parentMethods = get_class_methods(get_parent_class($object));
            $methods = array_intersect($methods, $parentMethods);
        }
        
        return $methods;
    }

    function getLineage($object)
    {
        if(get_parent_class($object)) {
            $parent = get_parent_class($object);
            $parentObject = new $parent;
            
            $lineage = getLineage($parentObject);
            $lineage[] = get_class($object);
        }
        else {
            $lineage = array(get_class($object));
        }
        
        return $lineage;
    }

    function getChildClasses($object)
    {
        $classes = get_declared_classes();
        $children = array();

        foreach ($classes as $class) {
            if (substr($class, 0, 2) == '__') {
                continue;
            }
            $child = new $class;
        }

        if (get_parent_class($child) == get_class($object)) {
            $children[] = $class;
        }
    return $children;
    }

    function printObjectInfo($object)
    {
        $class = get_class($object);
        echo "<h2>Class</h2>";
        echo "<p>{$class}</p>";
        echo "<h2>Inheritance</h2>";

        echo "<h3>Parents</h3>";
        $lineage = getLineage($object);
        array_pop($lineage);
        
        if (count($lineage) > 0) {
            echo "<p>" . join(" -&gt; ", $lineage) . "</p>";
        }
        else {
            echo "<i>None</i>";
        }

        echo "<h3>Children</h3>";
        $children = getChildClasses($object);
        echo "<p>";

        if (count($children) > 0) {
            echo join(', ', $children);
        }
        else {
            echo "<i>None</i>";
        }
        echo "</p>";

        echo "<h2>Methods</h2>";
        $methods = getCallableMethods($class);
        $object_methods = get_methods($object);
        if (!count($methods)) {
            echo "<i>None</i><br />";
        }
        else {
            echo '<p>Inherited methods are in <i>italics</i>.</p>';
        }
        foreach($methods as $method) {
            if (in_array($method, $object_methods)) {
                echo "<b>{$method}</b>();<br />";
            }
            else {
                echo "<i>{$method}</i>();<br />";
            }
        }
        echo "<h2>Properties</h2>";
        $properties = get_class_vars($class);
        if (!count($properties)) {
            echo "<i>None</i><br />";
        }
        else {
            foreach(array_keys($properties) as $property) {
                echo "<b>\${$property}</b> = " . $object->$property . "<br />";
            }
        }
        echo "<hr />";
    }


?>