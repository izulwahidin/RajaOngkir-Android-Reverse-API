<?php
spl_autoload_register(function($class){
    $class = explode('\\',$class);
    $class = $class[2];
    require_once(__DIR__."/Ongkir/{$class}.php");
});