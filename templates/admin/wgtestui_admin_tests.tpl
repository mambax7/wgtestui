<!-- Header -->
<{include file='db:wgtestui_admin_header.tpl' }>

<{if $tests_list|default:''}>
    <table class='table table-bordered'>
        <thead>
            <tr class='head'>
                <th class="center"><{$smarty.const._AM_WGTESTUI_TEST_ID}></th>
                <th class="center"><{$smarty.const._AM_WGTESTUI_TEST_URL}></th>
                <th class="center"><{$smarty.const._AM_WGTESTUI_TEST_MODULE}></th>
                <th class="center"><{$smarty.const._AM_WGTESTUI_TEST_AREA}></th>
                <th class="center"><{$smarty.const._AM_WGTESTUI_TEST_TYPE}></th>
                <th class="center"><{$smarty.const._AM_WGTESTUI_TEST_RESULTCODE}></th>
                <th class="center"><{$smarty.const._AM_WGTESTUI_TEST_INFOTEXT}></th>
                <th class="center"><{$smarty.const._AM_WGTESTUI_TEST_DATETEST}></th>
                <th class="center"><{$smarty.const._AM_WGTESTUI_TEST_DATECREATED}></th>
                <th class="center"><{$smarty.const._AM_WGTESTUI_TEST_SUBMITTER}></th>
                <th class="center width5"><{$smarty.const._AM_WGTESTUI_FORM_ACTION}></th>
            </tr>
        </thead>
        <{if $tests_count|default:''}>
        <tbody>
            <{foreach item=test from=$tests_list}>
            <tr class='<{cycle values='odd, even'}>'>
                <td class='center'><{$test.id}></td>
                <td class='center'><{$test.url}></td>
                <td class='center'><{$test.module}></td>
                <td class='center'><{$test.area}></td>
                <td class='center'><{$test.type}></td>
                <td class='center'><{$test.resultcode}> <{$test.resulttext}></td>
                <td class='center'><{$test.infotext_short}></td>
                <td class='center'><{$test.datetest}></td>
                <td class='center'><{$test.datecreated}></td>
                <td class='center'><{$test.submitter}></td>
                <td class="center  width5">
                    <a href="tests.php?op=edit&amp;test_id=<{$test.id}>&amp;start=<{$start}>&amp;limit=<{$limit}>" title="<{$smarty.const._EDIT}>"><img src="<{xoModuleIcons16 'edit.png'}>" alt="<{$smarty.const._EDIT}> tests" ></a>
                    <a href="tests.php?op=clone&amp;test_id_source=<{$test.id}>" title="<{$smarty.const._CLONE}>"><img src="<{xoModuleIcons16 'editcopy.png'}>" alt="<{$smarty.const._CLONE}> tests" ></a>
                    <a href="tests.php?op=delete&amp;test_id=<{$test.id}>" title="<{$smarty.const._DELETE}>"><img src="<{xoModuleIcons16 'delete.png'}>" alt="<{$smarty.const._DELETE}> tests" ></a>
                </td>
            </tr>
            <{/foreach}>
        </tbody>
        <{/if}>
    </table>
    <div class="clear">&nbsp;</div>
    <{if $pagenav|default:''}>
        <div class="xo-pagenav floatright"><{$pagenav|default:false}></div>
        <div class="clear spacer"></div>
    <{/if}>
<{/if}>
<{if $showInfoExecute|default:false}>
    <div class="wgt-info-execute">
        <h5><{$smarty.const._AM_WGTESTUI_TEST_INFO_EXEC1}></h5>
        <ul>
            <li><{$smarty.const._AM_WGTESTUI_TEST_INFO_EXEC2}></li>
            <li><{$smarty.const._AM_WGTESTUI_TEST_INFO_EXEC3}></li>
        </ul>
    </div>
<{/if}>
<{if $form|default:''}>
    <{$form|default:false}>
<{/if}>
<{if $error|default:''}>
    <div class="errorMsg"><strong><{$error|default:false}></strong></div>
<{/if}>

<!-- Footer -->
<{include file='db:wgtestui_admin_footer.tpl' }>
