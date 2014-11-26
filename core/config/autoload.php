<?php
    function autoload($file_name) {
        if(file_exists(_LIB_ . $file_name . '.php')) {
            require _LIB_ . $file_name . '.php';
        } else {
            exit ('ERROR: The file ' . $file_name . '.php is missing in the ' . _LIB_ . ' folder.');
        }
    }

    spl_autoload_register('autoload');