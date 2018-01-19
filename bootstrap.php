<?php

function __autoload($class_name) {
    $class_name = str_replace('\\', '/', $class_name);
    $file = __DIR__ . '/src/' . $class_name . '.php';
    if(file_exists($file)) {
        require_once __DIR__ . '/src/' . $class_name . '.php';
        return true;
    }

    return false;
}

spl_autoload_register('__autoload');
