<?php

spl_autoload_register(function ($class_name) {
    require_once '../app/core/'.$class_name . '.php';
});