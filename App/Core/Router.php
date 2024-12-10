<?php

namespace App\Core;

class Router
{
    const CONTROLLER_NAMESPACE = 'App\Controllers\\';
    const ADMIN_CONTROLLER_NAMESPACE = 'App\Controllers\\';

    private string $method_name = 'index';
    private string $controller_name = 'Main';
    private array $request_uri = [];
    private array $config = [];

    public function __construct($config)
    {
        $this->config = $config;
        $this->process_request();
        $this->set_controller_name();
        $this->set_method_name();
    }

    public function run()
    {
        $this->validate();

        $namespace = $this->get_name_space();

        $controller_obj = new $namespace();

        call_user_func([$controller_obj, $this->method_name]);
    }

    private function validate(): void
    {
        if (!isset($this->config[$this->controller_name][$this->method_name])) {
            $this->controller_name = 'Error404';  
            $this->method_name = 'index';
        } else {
            $config_array = explode('/', $this->config[$this->controller_name][$this->method_name]);
            $this->controller_name = $config_array[0]; 
            $this->method_name = $config_array[1]; 
        }
    }

    private function get_name_space(): string
    {
        if (isset($this->request_uri[1]) && $this->request_uri[1] === 'admin') {
            return self::ADMIN_CONTROLLER_NAMESPACE . ucfirst($this->controller_name); 
        } else {
            return self::CONTROLLER_NAMESPACE . ucfirst($this->controller_name); 
        }
    }

    private function set_controller_name(): void
    {
        $this->controller_name = !empty($this->request_uri[2]) ? $this->request_uri[2] : 'main';
    }

    private function set_method_name(): void
    {
        $this->method_name = !empty($this->request_uri[3]) ? $this->request_uri[3] : 'index';
    }

    private function process_request(): void
    {
        $this->request_uri = isset($_SERVER["REQUEST_URI"]) ? explode('/', $_SERVER['REQUEST_URI']) : [];
    }

    private function isAdmin(): bool
    {
        return isset($this->request_uri[1]) && $this->request_uri[1] === 'admin';
    }
}
