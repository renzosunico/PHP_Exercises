<?php

class HTMLStuff
{
    static function startTable()
    {
        echo "<table border=\"1\"<br/>";
    }
    
    static function endTable()
    {
        echo "</table><br/>";
    }
}

HTMLStuff::startTable();
HTMLStuff::endTable();

?>