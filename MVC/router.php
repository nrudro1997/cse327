<?php
@session_start();

include "app/app.php";

if (router()->getType()=="controller") {
    try {
        router()->callObject('eftec\examplebook\controller\%sController', true);
    } catch (Exception $e) {
        echo $e->getMessage();
        echo $e->getTraceAsString();
        echo "<hr>";
        echo "try /Book/List to show the table<br>";
        echo "Or /Book/Index to insert a new book<br>";
    }
}
