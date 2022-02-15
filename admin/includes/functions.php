<?php

function autoload($class)
{
    $class = strtolower($class);
    $path = "includes/{$class}.php";

    // return file_exists($path) ? require_once $path : die("This File name {$class}.php was not found... ");
    if (is_file($path) && !class_exists($class)) {
        include $path;
    }
}

spl_autoload_register('autoload');
