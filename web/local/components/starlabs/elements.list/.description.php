<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

Loc::loadMessages(__FILE__);

$arComponentDescription = [
	'NAME' => Loc::getMessage('ELEMENTS_LIST_NAME'),
	'DESCRIPTION' => Loc::getMessage('ELEMENTS_LIST_DESCRIPTION'),
	'SORT' => 20,
	'PATH' => [
		'ID' => 'basis',
		'NAME' => Loc::getMessage('ELEMENTS_LIST_GROUP'),
		'SORT' => 10,
		'CHILD' => [
			'ID' => 'elements',
			'NAME' => Loc::getMessage('ELEMENTS_LIST_CHILD_GROUP'),
			'SORT' => 10
		]
	]
];