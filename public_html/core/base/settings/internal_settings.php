<?php

defined('VG_ACCESS') or die('Access denied');

const TEMPLATE = 'templates/default/';
const ADMIN_PANEL = 'core/admin/views/';

const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const COOKIE_TIME = 60;
const BLOCK_TIME = 3;

const QTY = 8;
const QTY_LINKS = 3;

const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' =>[]
];

const USER_CSS_JS = [
    'styles' => [],
    'scripts' =>[]
];

use core\base\exceptions\RouteException;

function autoloadMainClass($calss_name){
    $calss_name = str_replace('\\','/',$calss_name);

    if(!@include_once $calss_name . '.php'){
        throw new \core\base\exceptions\RouteException('not correct file name or there is no such file');
    }
}

spl_autoload('autoloadMainClass');