<?php

class Person
{
    public $name = '';
    public $age;
    
    public function __construct()
    {
        $this->age = 0;
    }
    
    public function incrementAge()
    {
        $this->age += 1;
        $this->ageChanged();
    }
    
    protected function decrementAge()
    {
        $this->age -= 1;
        $this->ageChanged();
    }
    
    private function ageChanged()
    {
        echo "<br/>Age changed to {$this->age}";
    }
    
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

}

class SuperNaturalPerson extends Person
{
    public function incrementAge()
    {
        $person = new Person();
        $person->decrementAge();
    }
}

    $childclass = new Child();
    $person = new Person();
    $person->incrementAge();

/* Will cause an error since
decrementAge is protected and
ageChanged is private

    $person->decrementAge();
    $person->ageChanged();     */

    $person = new SuperNaturalPerson;
    $person->incrementAge();

?>