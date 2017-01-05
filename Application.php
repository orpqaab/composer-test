<?php

namespace Work\ComposerTest;

class Application {

    private $controllers = [
        "create" => "Work\ComposerTest\controllers\CreateController",
    ];

    public function run($query_params) {

        $controller = $this->controllers[$query_params["controller"]];
        $action = $query_params["action"];

        $controllerInstance = new $controller();
        $controllerInstance->$action();
    }
}