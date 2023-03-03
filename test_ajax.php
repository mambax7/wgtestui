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

use Xmf\Request;

require_once __DIR__ . '/header.php';
require_once \XOOPS_ROOT_PATH . '/header.php';

XoopsLoad::load('xoopslogger');
$xoopsLogger = XoopsLogger::getInstance();
$xoopsLogger->activated = false;

// Get instance of module
$helper = \XoopsModules\Wgtestui\Helper::getInstance();
$testsHandler = $helper->getHandler('Tests');

$url = Request::getString('url', 'invalid url');

$testsObj = $testsHandler->create();
if (!is_object($testsObj)) {
    header('Content-Type: application/json');
    echo json_encode(['status'=>'error','message'=>'invalid object testsObj']);
} else {
    $currentUrl = str_replace(XOOPS_URL . '/', '', $url);
    $arrTemp = explode('/', $currentUrl);
    $testModule = \count($arrTemp) > 0 ? $arrTemp[1] : 'xoopscore';
    $testsObj->setVar('test_url', $currentUrl);
    $testsObj->setVar('test_area', 2);
    $testsObj->setVar('test_module', $testModule);
    $testsObj->setVar('test_type', 1);
    $testsObj->setVar('test_resultcode', '0');
    $testsObj->setVar('test_resulttext', '');
    $testsObj->setVar('test_infotext', '');
    $testsObj->setVar('test_datetest', \time());
    $testsObj->setVar('test_datecreated', \time());
    $testsObj->setVar('test_submitter', $GLOBALS['xoopsUser']->uid());
    // Insert Data
    if ($testsHandler->insert($testsObj)) {
        // redirect after insert
        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'no errors']);
    } else {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => $testsObj->getErrors()]);
    }
}
