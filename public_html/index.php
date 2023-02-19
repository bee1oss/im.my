<?php

define('VG_ACCESS', true);

header('Content-Type:text/html;charset=utf-8');//ekrana veri yazdirmadan once yazilmasi lazim
session_start();

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';
use core\base\exceptions\RouteException;

try {
    RouteController::getInstance()->route();
}
catch (RouteException $e){
    exit($e->getMessage());
}