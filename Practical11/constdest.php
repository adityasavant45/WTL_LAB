<?php
class Check {
    function __construct() {
        echo "Constructor called !!! <br>";
    }

    function __destruct() {
        echo "Destructor called !!! <br>";
    }
}


$obj = new Check();

echo "The destructor will be called automatically at the end of the script <br>";

?>