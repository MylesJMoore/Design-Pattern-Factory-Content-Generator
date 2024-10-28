<?php

class Config {
    private static $instance = null;
    private $settings = [];

    // Private constructor to prevent multiple instances
    private function __construct() {
        // Define some configuration settings (example)
        $this->settings['app_name'] = 'Singleton Config Manager';
        $this->settings['version'] = '1.0.0';
        $this->settings['environment'] = 'development'; // Could be 'production'
        $this->settings['db_host'] = 'localhost';
        $this->settings['db_user'] = 'root';
        $this->settings['db_password'] = '';
    }

    // The static method to get the single instance of the class
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    // Method to retrieve configuration values
    public function get($key) {
        if (isset($this->settings[$key])) {
            return $this->settings[$key];
        }
        return null;
    }

    // Method to set or update configuration values
    public function set($key, $value) {
        $this->settings[$key] = $value;
    }
}