<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once __DIR__ . DIRECTORY_SEPARATOR . join(DIRECTORY_SEPARATOR, ['vendor', 'autoload']) . '.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . join(DIRECTORY_SEPARATOR, ['src', 'config']) . '.php';

use app\db\DataBaseConnect;
use app\Router;

//(new DataBaseConnect)->getConnect(DB);

try {
    $render = (new Router($_GET))->getController();
    $container = $render->getAction()['view'];
    extract($render->getAction()['params'], EXTR_OVERWRITE);
    require_once __DIR__ . DIRECTORY_SEPARATOR . join(DIRECTORY_SEPARATOR, ['src', 'views', $render->layout]) . '.php';
} catch (Exception $e) {
    echo $e->getMessage();
}




