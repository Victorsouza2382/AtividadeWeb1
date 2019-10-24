<?php

function __autoload($class)
{
    if(file_exists($class . '.php')){
        include_once $class . '.php'; 
    } elseif(file_exists( '../' . $class . '.php')){
        include_once '../' . $class . '.php';
    } elseif(file_exists( '../' . strtolower($class) . '/' . $class . '.php')){
        include_once  '../' . strtolower($class) . '/' . $class . '.php';
    }
   
}
