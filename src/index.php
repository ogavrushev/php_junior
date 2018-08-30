<?php

require_once('../vendor/autoload.php');

class Main {
    static function init() {
        try {
            //todo: handle request
            echo 'Rate app started';
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}

Main::init();