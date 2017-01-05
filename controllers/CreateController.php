<?php

namespace Work\ComposerTest\Controllers;

class CreateController {

    private $employeeRepository;

    function __construct() {
        $this->employeeRepository = new \Bevprog\CrudDemo\Util\EmployeeRepository();
    }

    private function getOutput() {
        ob_start();
        include \Work\ComposerTest\Configuration::VIEWS_DIR . "/create_success.html";
        return ob_get_flush();
    }

}
