<?php

spl_autoload_register('autoload');

function autoload($classname)
{
    $path = 'Classes/';
    $extension = '.class.php';
    $fullPath = $path . $classname . $extension;

    if(!file_exists($fullPath))
    {
        return false;
    }

    include_once $fullPath;
}
