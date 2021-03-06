<?php
namespace Starlabs\Project;

use Bitrix\Main\Loader;
use Bitrix\Main\LoaderException;
use Exception;

/**
 * Основной класс модуля
 */
class Module
{
	/**
	 * Обработчик начала отображения страницы
	 * @return void
	 * @throws Exception
	 * @throws LoaderException
	 */
	public static function onPageStart()
	{
		if (!Loader::includeModule('starlabs.tools')) {
			throw new Exception('Module "starlabs.tools" was not installed.');
		}

		self::defineConstants();
		self::setupEventHandlers();
	}

	/**
	 * Задает константы проекта
	 */
	protected static function defineConstants()
	{

	}

	/**
	 * Обработчики событий.
	 */
	protected static function setupEventHandlers()
	{
//        Events\Backup::setHandlers();
	}
}
