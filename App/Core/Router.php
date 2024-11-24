<?php 

namespace App\Core;

class Router
{
    const CONTROLLER_NAMESPACE = 'App\Controllers\\';

    public function run(): void
    {
        $controllerName = $this->getControllerName();
        $methodName = $this->getMethod();

        echo "This is " . $controllerName . " page" . "<br>";

    
        $namespace = self::CONTROLLER_NAMESPACE . ucfirst($controllerName);

        if (!class_exists($namespace)) {
            $namespace = self::CONTROLLER_NAMESPACE . 'Error404';
            echo "Error404 page not found" . "<br>"; 
        }

        $controller = new $namespace();
        if (method_exists($controller, $methodName)) {
            echo $controller->$methodName();
        } else {
            echo "This is : " . $methodName . " method not found" . "<br>";
        }
    }

    private function getControllerName(): string
    {
        return $this->prepareControllerName();
    }

    private function prepareControllerName(): string
    {
        $result = isset($_SERVER["REQUEST_URI"]) ? explode('/', parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)) : [];
        $result = is_array($result) && !empty($result[2]) ? $result[2] : 'Main'; 
        return $result;
    }

    private function getMethod(): string
    {
        $result = isset($_SERVER["REQUEST_URI"]) ? explode('/', parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)) : [];
        return isset($result[3]) ? $result[3] : 'index'; 
    }
}
