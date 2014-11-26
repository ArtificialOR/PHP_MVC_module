<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    define('_URL_', 'http://127.0.0.1/mvc/');

    define('_LIB_', 'core/lib/');
    define('_CONTROLLER_', 'core/controller/');
    define('_MODEL_', 'core/model/');
    define('_VIEW_', 'core/view/');

    define('_DB_TYPE_', 'mysql');
    define('_DB_HOST_', '127.0.0.1');
    define('_DB_NAME_', 'mvc_db');
    define('_DB_USER_', 'root');
    define('_DB_PASS_', '');

    define('HASH_COST_FACTOR', '10');