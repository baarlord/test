<?php
defined('B_PROLOG_INCLUDED') || die;

use Bitrix\Main\ModuleManager;

class needleo_test extends CModule
{
    function __construct()
    {
        $arModuleVersion = array();
        include(__DIR__ . '/version.php');
        $this->MODULE_ID = 'needleo.test';
        $this->MODULE_NAME = 'needleo.test';
        $this->MODULE_DESCRIPTION = 'Тестовый модуль';
        $this->MODULE_VERSION = $arModuleVersion['VERSION'];
        $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
    }

    function DoInstall(): void
    {
        ModuleManager::registerModule('needleo.test');
    }

    function DoUninstall(): void
    {
        ModuleManager::unRegisterModule('needleo.test');
    }
}
