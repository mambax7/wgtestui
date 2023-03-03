<{include file='db:wgtestui_header.tpl' }>

<!-- Start index list -->
<table>
    <thead>
        <tr class='center'>
            <th><{$smarty.const._MA_WGTESTUI_TITLE}>  -  <{$smarty.const._MA_WGTESTUI_DESC}></th>
        </tr>
    </thead>
    <tbody>
        <tr class='center'>
            <td class='bold pad5'>
                <ul class='menu text-center'>
                    <li><a href='<{$wgtestui_url}>'><{$smarty.const._MA_WGTESTUI_INDEX}></a></li>
                </ul>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr class='center'>
            <td class='bold pad5'>
                <{if $adv|default:''}><{$adv|default:false}><{/if}>
            </td>
        </tr>
    </tfoot>
</table>
<!-- End index list -->

<{include file='db:wgtestui_footer.tpl' }>
