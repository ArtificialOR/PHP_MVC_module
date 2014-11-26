<?php
    class Database extends PDO {
        public function __construct() {
            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            parent::__construct(_DB_TYPE_ . ':host=' . _DB_HOST_ . ';dbname=' . _DB_NAME_ . ';charset=utf8', _DB_USER, DB_PASS_, $options);
        }
    }