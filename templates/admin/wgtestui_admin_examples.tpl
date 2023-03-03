<!-- Header -->
<{include file='db:wgtestui_admin_header.tpl' }>

<{if $show_fatalerror|default:false}>
    <{include file='db:wgtestui_admin_examples_err.tpl' }>
<{/if}>
<{if $show_warning|default:false}>
    <{if $smarty_not_exist}>
        <{$smarty_not_exist}>
    <{/if}>
<{/if}>


<!-- Footer -->
<{include file='db:wgtestui_admin_footer.tpl' }>
