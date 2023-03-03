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

require_once __DIR__ . '/admin.php';

// ---------------- Main ----------------
\define('_MA_WGTESTUI_INDEX', 'Overview wgTestUI');
\define('_MA_WGTESTUI_TITLE', 'wgTestUI');
\define('_MA_WGTESTUI_DESC', 'This module is for doing following...');
\define('_MA_WGTESTUI_INDEX_DESC', 'Welcome to the homepage of your new module wgTestUI!<br>This description is only visible on the homepage of this module.');
\define('_MA_WGTESTUI_NO_PDF_LIBRARY', 'Libraries TCPDF not there yet, upload them in root/Frameworks');
\define('_MA_WGTESTUI_NO', 'No');
\define('_MA_WGTESTUI_DETAILS', 'Show details');
\define('_MA_WGTESTUI_BROKEN', 'Notify broken');
// ---------------- Contents ----------------
// Test
\define('_MA_WGTESTUI_TEST', 'Test');
\define('_MA_WGTESTUI_TEST_ADD', 'Add Test');
\define('_MA_WGTESTUI_TEST_EDIT', 'Edit Test');
\define('_MA_WGTESTUI_TEST_DELETE', 'Delete Test');
\define('_MA_WGTESTUI_TEST_CLONE', 'Clone Test');
\define('_MA_WGTESTUI_TEST_DETAILS', 'Details Test');
\define('_MA_WGTESTUI_TESTS', 'Tests');
\define('_MA_WGTESTUI_TESTS_LIST', 'List of Tests');
\define('_MA_WGTESTUI_TESTS_TITLE', 'Tests title');
\define('_MA_WGTESTUI_TESTS_DESC', 'Tests description');
// Caption of Test
\define('_MA_WGTESTUI_TEST_ID', 'Id');
\define('_MA_WGTESTUI_TEST_URL', 'Url');
\define('_MA_WGTESTUI_TEST_AREA', 'Area');
\define('_MA_WGTESTUI_TEST_TYPE', 'Type');
\define('_MA_WGTESTUI_TEST_RESULTCODE', 'Resultcode');
\define('_MA_WGTESTUI_TEST_RESULTTEXT', 'Resulttext');
\define('_MA_WGTESTUI_TEST_DATETEST', 'Datetest');
\define('_MA_WGTESTUI_TEST_DATECREATED', 'Datecreated');
\define('_MA_WGTESTUI_TEST_SUBMITTER', 'Submitter');
\define('_MA_WGTESTUI_INDEX_THEREARE', 'There are %s Tests');
\define('_MA_WGTESTUI_INDEX_LATEST_LIST', 'Last wgTestUI');
// Submit
\define('_MA_WGTESTUI_SUBMIT', 'Submit');
\define('_MA_WGTESTUI_SAVE', 'Save');
// Form
\define('_MA_WGTESTUI_FORM_OK', 'Successfully saved');
\define('_MA_WGTESTUI_FORM_DELETE_OK', 'Successfully deleted');
\define('_MA_WGTESTUI_FORM_SURE_DELETE', "Are you sure to delete: <b><span style='color : Red;'>%s </span></b>");
\define('_MA_WGTESTUI_FORM_SURE_RENEW', "Are you sure to update: <b><span style='color : Red;'>%s </span></b>");
\define('_MA_WGTESTUI_INVALID_PARAM', 'Invalid parameter');
// Admin link
\define('_MA_WGTESTUI_ADMIN', 'Admin');
// ---------------- End ----------------
