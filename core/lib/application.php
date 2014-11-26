<?php
    class Application {
        private $_controller = 'home';
        private $_method = 'index';
        private $_args = [];
        
        public function __construct() {
            $url = $this->_parseUrl();
            
            if(file_exists(_CONTROLLER_ . $url[0] . '.php')) {
                $this->_controller = $url[0];
                unset($url[0]);
            }
            
            require _CONTROLLER_ . $this->_controller . '.php';
            $this->_controller = new $this->_controller();
            
            if(isset($url[1])) {
                if(method_exists($this->_controller, $url[1])) {
                    $this->_method = $url[1];
                    unset($url[1]);
                }
            }
            
            $this->_args = $url ? array_values($url) : [];
            call_user_func_array([$this->_controller, $this->_method], $this->_args);
        }
        
        private function _parseUrl() {
            if(isset($_GET['url'])) {
                return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            }
        }
    }