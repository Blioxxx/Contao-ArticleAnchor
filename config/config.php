<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Article_Anchor
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

array_insert($GLOBALS['BE_MOD']['content'], 20, array (
    'article_anchor' => array (
        'callback'  => 'article_anchor',
        'icon'      => 'system/modules/article_anchor/assets/icon.png',
    )
));

if($_GET['do'] == 'article_anchor'){
    $GLOBALS['TL_CSS'][] = 'system/modules/article_anchor/assets/css/general.css';
    $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/article_anchor/assets/javascript/clipboard.js';
}