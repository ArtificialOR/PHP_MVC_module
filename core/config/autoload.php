<?php
    function autoload($class) {
        if(file_exists(_LIB_ . $class . '.php')) {
            require _LIB_ . $class . '.php';
        } else {
            exit ('ERROR: The file ' . $class . '.php is missing in the ' . _LIB_ . ' folder.');
        }
    }

    spl_autoload_register('autoload');