<?php

namespace core\base\controllers;

class RouteController
{
    static private $_instance;
    static public function getInstance(){//in the static kontekste dont accessebale this 
        return self::$_instance;
    }
}