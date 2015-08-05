<?php

abstract class Component
{
    abstract function printOutput();
}

class ImageComponent extends Component
{
    function printOutput()
    {
        echo "Pretty Picture";
    }
}

?>