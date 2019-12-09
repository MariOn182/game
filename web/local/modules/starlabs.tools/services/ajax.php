<?php

use \Bitrix\Main\Loader;
use \Bitrix\Main\Application;
use \Starlabs\Tools\Mvc\Controller\Prototype as Mvc;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

$request = Application::getInstance()->getContext()->getRequest();

try {
    if (!Loader::includeModule('starlabs.tools')) {
        throw new Exception('Can\'t include module "starlabs.tools".');
    }

    $name = htmlspecialchars($request->getQuery("controller"));
    $action = htmlspecialchars($request->getQuery("action"));

    $controller = Mvc::factory($name);
    $controller->doAction($action);
} catch (Exception $e) {
    print $e->GetMessage();
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php';
