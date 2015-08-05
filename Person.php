<?php

class Person
{
    public $name = '';
    
    final function getName()
    {
        return $this->name;
    }
    
    function setName($newName)
    {
        $this->name = $newName;
    }
}

class Child extends Person
{
    /* Fatal error: Cannot override final method Person::getName() in                   /var/www/PHP_Exercises/Person.php on line 24    */
    
    function getName()
    {
        
    }
}

    $object = new Child();
?>