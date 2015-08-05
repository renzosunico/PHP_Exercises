<?php

class A
{
    public $foo = "foo";
    public $bar = "bar";
    public $baz = 17.0;
    
    function firstFunction()
    {
    }
    
    function secondFunction()
    {   
    }
}

class B extends A
{
    public $quux = false;
    
    function thirdFunction()
    {
    }
    
}

class C extends B
{
}

$a = new A;
$a->foo = "sylvie";
$a->bar = 23;

$b = new B;
$b->foo = "bruno";
$b->quux = true;

$c = new C;

printObjectInfo($a);
printObjectInfo($b);
printObjectInfo($c);

?>