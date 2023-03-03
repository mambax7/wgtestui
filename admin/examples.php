<?php declare(strict_types=1);
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Wgtestui module for xoops
 *
 * @copyright      module for xoops
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @since          1.0
 * @min_xoops      2.5.11
 * @author         Wedega - Email:<webmaster@wedega.com> - Website:<https://wedega.com>
 * @version        $Id: 1.0 images.php 1 Mon 2018-03-19 10:04:51Z XOOPS Project (www.xoops.org) $
 */

use Xmf\Request;

require __DIR__ . '/header.php';
// It recovered the value of argument op in URL$
$op = Request::getString('op', 'list');

$templateMain = 'wgtestui_admin_examples.tpl';

switch ($op) {
    case 'list':
    default:
        break;
    case 'fatalerror':
        // produce notice about 'Only variables should be passed by reference
        require __DIR__ . '/example_fe.php';
        break;
    case 'errors':
        // produce notice about smarty without default
        $GLOBALS['xoopsTpl']->assign('show_warning', true);
        // produce notice about 'Only variables should be passed by reference
        $testsObj =& $testsHandler->get(1);
        break;
    case 'deprecated':
        $GLOBALS['xoopsLogger']->addDeprecated("'/class/xoopsmodule.php' is deprecated since XOOPS 2.5.4, please use '/kernel/module.php' instead.");
        $GLOBALS['xoopsLogger']->addDeprecated("Class 'xoopstree' is deprecated, check 'XoopsObjectTree' in tree.php");
        break;
}

require __DIR__ . '/footer.php';
