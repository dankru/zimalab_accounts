<?php

// /
// /accounts
// /accounts/login
// /accounts/register
// /accounts/account
class Routing {
    public static function buildRoute() {
        // Default actions and contollers
        $controllerName = "IndexController";
        $modelName      = "IndexModel";
        $action         = "Index";

        $route = explode("/", $_SERVER['REQUEST_URI']);

        // change controller and model if route is not default
        if ($route[2] != '') {
            $contollerName = ucfirst($route[2]. "Controller");
            $modelName = ucfirst($route[2]. "Model");
        }
        // else default
        require_once CONTROLLER_PATH . $controllerName . ".php"; //IndexController.php
        require_once MODEL_PATH . $modelName . ".php"; //IndexModel.php

        // spot action if set
        if (isset($route[2]) && $route[2] !='') {
            $action = $route[2];
        }
        $controller = new $controllerName();
        $controller->$action();
    }
    public function errorPage() {

    }
}