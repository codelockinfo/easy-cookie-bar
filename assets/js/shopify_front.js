function include(filename, onload) {
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.src = filename;
    script.type = 'text/javascript';
    script.onload = script.onreadystatechange = function() {
        if (script.readyState) {
            if (script.readyState === 'complete' || script.readyState === 'loaded') {
                script.onreadystatechange = null;                                                  
                onload();
            }
        } 
        else {
            onload();          
        }
    };
    head.appendChild(script);
}

include('https://codelocksolutions.com/easy-cookie-bar/assets/js/jquery-2.1.1.js', function() {
    $(document).ready(function() {
        var shop = Shopify.shop;
        $.ajax({
            url: "https://codelocksolutions.com/easy-cookie-bar/user/ajax_call.php",
            type: "POST",
            dataType: "json",
            data: {
                'store': shop,
                'routine_name': 'btn_enable_disable' ,
            },
            success: function(comeback) {
                $status = comeback.outcome.status !== undefined ? comeback.outcome.status : '';
                console.log(comeback.outcome.status +".....STATUS");
                if ($status == 1) {
                  
                }
            }
        });

    });
});
