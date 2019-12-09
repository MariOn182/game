<?php
namespace Starlabs\Project;

use Bitrix\Main\Event;

const BASE_DIR = __DIR__;
$event = new Event('starlabs.project', 'onModuleInclude');
$event->send();
