<?php

use Bitrix\Main\Loader;
use needleo\test\user\UserHelper;

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
/** @var CMain $APPLICATION */
$APPLICATION->SetTitle('test');
?>
<?php
Loader::includeModule('needleo.test');
$userHelper = new UserHelper();
print_r($userHelper->getUserLogin(1));
?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
