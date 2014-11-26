<?php
    class Controller {
        function __construct() {
            Session::init();
        }
        
        public function loadModel($name) {
            if (file_exists(_MODEL_ . strtolower($name) . '_model.php')) {
                require _MODEL_ . strtolower($name) . '_model.php';
                $model_name = $name . '_Model';
                return new $model_name($this->db);
            }
        }
    }