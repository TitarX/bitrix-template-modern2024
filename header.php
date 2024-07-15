<?php
/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @global CDatabase $DB
 * @var array $arParams
 * @var array $arResult
 * @var string $templateName
 * @var string $templateFile
 * @var string $templateFolder
 * @var string $componentPath
 * @var CBitrixComponentTemplate $this
 * @var CBitrixComponent $component
 * @noinspection PhpUndefinedConstantInspection
 */

use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

Loc::loadMessages(__FILE__);
?>

    <html lang="ru">
    <head>
        <?php $APPLICATION->ShowHead(); ?>
        <title><?php $APPLICATION->ShowTitle() ?></title>
    </head>

    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">

<?php $APPLICATION->ShowPanel();
