<?php

namespace Work\ComposerTest\Controllers;

class CreateController {

    private function getOutput() {
        ob_start();
        include \Work\ComposerTest\Configuration::VIEWS_DIR . "/create_success.html";
        return ob_get_flush();
    }
    public function showForm(){
        return $this->getOutput();
    }
}
