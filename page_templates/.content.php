<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

Loc::loadMessages(__FILE__);

$TEMPLATE['standard.php'] = array('name' => Loc::getMessage('standart'), 'sort' => 1);
