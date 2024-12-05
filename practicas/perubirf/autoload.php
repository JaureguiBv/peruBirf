<?php
// autoload.php

function autoload($className) {
    $path = __DIR__ . '/app/' . str_replace("\\", "/", $className) . ".php";
    if (file_exists($path)) {
        require_once $path;
    }
}

spl_autoload_register('autoload');
