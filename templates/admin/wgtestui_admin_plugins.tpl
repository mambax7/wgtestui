<!-- Header -->
<{include file='db:wgtestui_admin_header.tpl' }>

<{if $error|default:''}>
    <div class="errorMsg"><strong><{$error|default:false}></strong></div>
<{/if}>

<!-- Section import -->
<{if $form_import|default:''}>
    <{$form_import|default:false}>
<{/if}>

<!-- Section export -->
<{if $form_export|default:''}>
    <{$form_export|default:false}>
<{/if}>

<!-- Footer -->
<{include file='db:wgtestui_admin_footer.tpl' }>
