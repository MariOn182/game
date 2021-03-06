<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

Loc::loadMessages(__FILE__);

$arComponentDescription = [
	'NAME' => Loc::getMessage('ELEMENTS_NAME'),
	'DESCRIPTION' => Loc::getMessage('ELEMENTS_DESCRIPTION'),
	'SORT' => 10,
	'PATH' => [
		'ID' => 'basis',
		'NAME' => Loc::getMessage('ELEMENTS_GROUP'),
		'SORT' => 10,
		'CHILD' => [
			'ID' => 'elements',
			'NAME' => Loc::getMessage('ELEMENTS_CHILD_GROUP'),
			'SORT' => 10
		]
	]
];