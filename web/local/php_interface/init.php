<?
if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/bitrix/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/vendor/autoload.php");
}
//\Bex\Monolog\MonologAdapter::loadConfiguration();
/*
return [
    'utf_mode' =>
        [
            'value' => true,
            'readonly' => true,
        ],
    'cache_flags' =>
        [
            'value' =>
                [
                    'config_options' => 3600,
                    'site_domain' => 3600,
                ],
            'readonly' => false,
        ],
    'cookies' =>
        [
            'value' =>
                [
                    'secure' => false,
                    'http_only' => true,
                ],
            'readonly' => false,
        ],
    'exception_handling' =>
        [
            'value' =>
                [
                    'debug' => true,
                    'handled_errors_types' => 4437,
                    'exception_errors_types' => 4437,
                    'ignore_silence' => false,
                    'assertion_throws_exception' => true,
                    'assertion_error_type' => 256,
                    'log' =>
                        [
                            'class_name' => '\\Bex\\Monolog\\ExceptionHandlerLog',
                            'settings' =>
                                [
                                    'logger' => 'feedback',
                                ],
                        ],
                ],
            'readonly' => false,
        ],
    'monolog' =>
        [
            'value' =>
                [
                    'handlers' =>
                        [
                            'default' =>
                                [
                                    'class' => '\\Monolog\\Handler\\StreamHandler',
                                    'level' => 'DEBUG',
                                    'stream' => '/home/bitrix/ext_www/formula.as/.!__monolog',
                                ],
                            'feedback_event_log' =>
                                [
                                    'class' => '\\Bex\\Monolog\\Handler\\BitrixHandler',
                                    'level' => 'DEBUG',
                                    'event' => 'TYPE_FOR_EVENT_LOG',
                                    'module' => 'monolog',
                                ],
                        ],
                    'loggers' =>
                        [
                            'app' =>
                                [
                                    'handlers' =>
                                        [
                                            0 => 'default',
                                        ],
                                ],
                            'feedback' =>
                                [
                                    'handlers' =>
                                        [
                                            0 => 'feedback_event_log',
                                        ],
                                ],
                        ],
                ],
            'readonly' => false,
        ],
    'connections' =>
        [
            'value' =>
                [
                    'default' =>
                        [
                            'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
                            'host' => 'localhost',
                            'database' => 'dbformula',
                            'login' => 'userformula',
                            'password' => 'UW]d6IVRhaYVNbF',
                            'options' => 2,
                        ],
                ],
            'readonly' => true,
        ],
    'crypto' =>
        [
            'value' =>
                [
                    'crypto_key' => 'b1308bf05ef98f43f490f0f72d42fcc3',
                ],
            'readonly' => true,
        ],
];
*/
?>
