<?php

function dump_die($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die(); // ignore every code after this die()
}

function urlIs($uri)
{
    return $_SERVER['REQUEST_URI'] === $uri;
}
