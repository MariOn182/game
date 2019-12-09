<?

use \Bitrix\Main\EventManager;
use \Bitrix\Main\ModuleManager;

Class starlabs_tools extends CModule
{
    public $MODULE_ID = 'starlabs.tools';
    public $MODULE_VERSION = '';
    public $MODULE_VERSION_DATE = '';
    public $MODULE_NAME = 'Вспомогательный модуль StarLabs';
    public $MODULE_DESCRIPTION = 'Набор вспомогательных решений';
    public $PARTNER_NAME = "StarLabs";
    public $PARTNER_URI = "http://starlabs.su/";

    /**
     * remark_tools constructor.
     */
    public function __construct()
    {
        $version = include __DIR__ . '/version.php';

        $this->MODULE_VERSION = $version['VERSION'];
        $this->MODULE_VERSION_DATE = $version['VERSION_DATE'];

        $this->eventHandlers = [
            [
                'main',
                'OnPageStart',
                '\Starlabs\Tools\Module',
                'onPageStart',
            ]
        ];
    }

    /**
     * @return bool
     */
    public function installFiles()
    {
        $moduleDir = explode('/', __DIR__);
        array_pop($moduleDir);
        $moduleDir = implode('/', $moduleDir);

        $sourceRoot = $moduleDir . '/install/';
        $targetRoot = $_SERVER['DOCUMENT_ROOT'];

        $parts = [
            'services' => [
                'target' => '/bitrix/services/starlabs.tools/',
                'rewrite' => false,
            ],
        ];
        foreach ($parts as $dir => $config) {
            CopyDirFiles(
                $sourceRoot . $dir,
                $targetRoot . $config['target'],
                $config['rewrite'],
                true
            );
        }

        $this->AddUrlRewriterRule();

        return true;
    }

    /**
     * Создаем правило для обработки ajax запросов
     */
    public function AddUrlRewriterRule()
    {
        Bitrix\Main\UrlRewriter::add('s1', [
            'CONDITION' => '#^/ajax/#',
            'RULE' => '',
            'ID' => null,
            'PATH' => '/bitrix/services/starlabs.tools/ajax.php',
            'SORT' => 110,
        ]);
    }

    /**
     * @return bool
     */
    public function unInstallFiles()
    {
        $moduleDir = explode('/', __DIR__);
        array_pop($moduleDir);
        $moduleDir = implode('/', $moduleDir);

        $sourceRoot = $moduleDir . '/install/';
        $targetRoot = $_SERVER['DOCUMENT_ROOT'];

        $parts = [
            'services' => [
                'target' => '/bitrix/services/starlabs.tools/',
                'rewrite' => false,
            ]
        ];
        foreach ($parts as $dir => $config) {

            DeleteDirFiles(
                $sourceRoot . $dir,
                $targetRoot . $config['target']
            );
        }

        return true;
    }

    /**
     * @return bool
     */
    public function installEvents()
    {
        $eventManager = EventManager::getInstance();
        foreach ($this->eventHandlers as $handler) {
            $eventManager->registerEventHandler($handler[0], $handler[1], $this->MODULE_ID, $handler[2], $handler[3]);
        }

        return true;
    }

    /**
     * @return bool
     */
    public function unInstallEvents()
    {
        $eventManager = EventManager::getInstance();
        foreach ($this->eventHandlers as $handler) {
            $eventManager->unRegisterEventHandler($handler[0], $handler[1], $this->MODULE_ID, $handler[2], $handler[3]);
        }

        return true;
    }

    /**
     *
     */
    public function DoInstall()
    {
        if ($this->installEvents() && $this->installFiles()) {
            ModuleManager::registerModule($this->MODULE_ID);
        }
    }

    /**
     *
     */
    public function DoUninstall()
    {
        if ($this->unInstallEvents() && $this->unInstallFiles()) {
            ModuleManager::unRegisterModule($this->MODULE_ID);
        }
    }


}
