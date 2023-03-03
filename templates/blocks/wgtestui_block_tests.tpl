
<a id='btn_add_test' class='btn btn-primary ' href="javascript:add_url_to_test('<{$currentUrl}>')" title='<{$smarty.const._MB_WGTESTUI_ADD_URL}>'><{$smarty.const._MB_WGTESTUI_ADD_URL}></a>


<script>
    function add_url_to_test($url) {
        //update data with ajax call of test_ajax.php
        $.ajax({
            url: '<{$wgtestui_url}>/test_ajax.php',
            dataType: 'json',
            type: "POST",
            data: {url: $url},
            success: function (response) {
                alert(response.message);
            },
            error: function (response) {
                alert('Error: ' + response.message);
            }
        });
    }
</script>