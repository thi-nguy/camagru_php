<?php

$title = "Test";

function dump_die($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// dump_die($_SERVER); // Get to know superglobal variables.

require "./views/test.view.php";
