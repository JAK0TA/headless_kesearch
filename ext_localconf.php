<?php

defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][Tpwd\KeSearch\Lib\Searchresult::class] = [
    'className' => Friendsoftypo3headless\HeadlessKesearch\XClass\Lib\Searchresult::class
];
