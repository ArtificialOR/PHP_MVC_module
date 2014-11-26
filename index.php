<?php
    require 'core/config/init.php';
    require 'core/config/autoload.php';

    if (file_exists('vendor/autoload.php')) {
        require 'vendor/autoload.php';
    }

    $app = new Application();