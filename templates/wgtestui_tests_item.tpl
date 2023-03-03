<i id='testId_<{$test.test_id}>'></i>
<div class='panel-heading'>
</div>
<div class='panel-body'>
</div>
<div class='panel-foot'>
    <div class='col-sm-12 right'>
        <{if $showItem|default:''}>
            <a class='btn btn-success right' href='tests.php?op=list&amp;start=<{$start}>&amp;limit=<{$limit}>#testId_<{$test.test_id}>' title='<{$smarty.const._MA_WGTESTUI_TESTS_LIST}>'><{$smarty.const._MA_WGTESTUI_TESTS_LIST}></a>
        <{else}>
            <a class='btn btn-success right' href='tests.php?op=show&amp;test_id=<{$test.test_id}>&amp;start=<{$start}>&amp;limit=<{$limit}>' title='<{$smarty.const._MA_WGTESTUI_DETAILS}>'><{$smarty.const._MA_WGTESTUI_DETAILS}></a>
        <{/if}>
        <{if $permEdit|default:''}>
            <a class='btn btn-primary right' href='tests.php?op=edit&amp;test_id=<{$test.test_id}>&amp;start=<{$start}>&amp;limit=<{$limit}>' title='<{$smarty.const._EDIT}>'><{$smarty.const._EDIT}></a>
            <a class='btn btn-primary right' href='tests.php?op=clone&amp;test_id_source=<{$test.test_id}>' title='<{$smarty.const._CLONE}>'><{$smarty.const._CLONE}></a>
            <a class='btn btn-danger right' href='tests.php?op=delete&amp;test_id=<{$test.test_id}>' title='<{$smarty.const._DELETE}>'><{$smarty.const._DELETE}></a>
        <{/if}>
    </div>
</div>
