<?php

declare(strict_types=1);

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * wgTestUI module for xoops
 *
 * @copyright    2021 XOOPS Project (https://xoops.org)
 * @license      GPL 2.0 or later
 * @package      wgtestui
 * @since        1.0.0
 * @min_xoops    2.5.10
 * @author       TDM XOOPS - Email:info@email.com - Website:https://xoops.org
 */

use XoopsModules\Wgtestui;
use XoopsModules\Wgtestui\Helper;
use XoopsModules\Wgtestui\Constants;

require_once \XOOPS_ROOT_PATH . '/modules/wgtestui/include/common.php';

/**
 * Function show block
 * @param  $options
 * @return array
 */
function b_wgtestui_tests_show($options)
{
    $block = ['dummy'];

    $currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $GLOBALS['xoopsTpl']->assign('wgtestui_url', \WGTESTUI_URL);
    $GLOBALS['xoopsTpl']->assign('currentUrl', $currentUrl);
    return $block;

}
