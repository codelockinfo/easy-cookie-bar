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
                'routine_name': 'appstatus' ,
            },
            success: function(comeback) {
                $status = comeback.outcome.status !== undefined ? comeback.outcome.status : '';
                console.log(comeback.outcome.status +".....STATUS");
                if ($status == 1) {
                    $.ajax({
                        url: "https://codelocksolutions.com/easy-cookie-bar/user/ajax_call.php",
                        type: "POST",
                        dataType: "json",
                        data: {
                            'store': shop,
                            'routine_name': 'cookies_bar_setting_select' ,
                        },
                        success: function(comeback) {
                            console.log(comeback);
                            setTimeout(function(){
                                //     $("body").append('<div class="custom-model-main model-open">'+
                                //     '<div class="custom-model-inner" style="-webkit-transform: translate(0, -25%); -ms-transform: translate(0, -25%); transform: translate(0, -25%); -webkit-transition: -webkit-transform 0.3s ease-out; -o-transition: -o-transform 0.3s ease-out; transition: -webkit-transform 0.3s ease-out; -o-transition: transform 0.3s ease-out; transition: transform 0.3s ease-out; transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out; display: inline-block; vertical-align: middle; width: 600px; margin: 30px auto; max-width: 97%;">  '+     
                                //     '<div class="close-btn" style="position: absolute; right: 7px; top: -12px; cursor: pointer; z-index: 99; font-size: 30px; color: #000;">×</div>'+
                                //        ' <div class="custom-model-wrap" style="display: block; width: 100%; position: relative; background-color: #fff; border: 1px solid #999; border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 6px; -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5); box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5); background-clip: padding-box; outline: 0; text-align: left; padding: 20px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;  box-sizing: border-box; max-height: calc(100vh - 70px);overflow-y: auto;">'+
                                //            ' <div class="pop-up-content-wrap">'+
                                //                '<div class="postalcode-popup">'+
                                //                     '<div class="heading heading--submit-postalcode">'+
                                //                         '<div class="heading__name" style="font-size: 20px;font-weight: 600;">Postnummer:</div>'+
                                //                     '</div>'+
                                //                     '<div class="postalcode-panel">'+
                                //                         '<div class="postalcode-panel__description">'+
                                //                             '<span class="instruction">For at se priser på shoppen skal du angive et postnummer</span>'+
                                
                                //                         '<div class="form-group-grid">'+
                                //                            ' <div class="form-group-grid__label">'+
                                //                          '       <label class="form-control-label">Postnummer:</label>'+
                                //                         '    </div>'+
                                //                             '<div class="form-group-grid__controls">'+
                                //                                ' <input type="text" id="freightAreaZipcodePopup" class="form-control clspostcode" autocomplete="off" value="" style="border: 1px solid #595959;">'+
                                //                                ' <button type="submit" class="btn btn-secondary postcode-app-btn postcode-checker-preview " style="line-height: 0.10  !important;">Gem</button>'+
                                //                            ' </div>'+
                                //                         '</div>'+
                                //                           '</div>'+
                                //                           '<div style="width: 50%;text-align: center;"> <span class="chkpostcode errorcolor"  style="color:red;"></span></div>'+
                                //                    ' </div>'+
                                //                 '</div>'+
                                //            ' </div>'+
                                //        ' </div> '+ 
                                //    ' </div> '+ 
                                //    ' <div class="bg-overlay" style="background: rgba(0, 0, 0, 0.6); z-index: 99; height: 100vh; width: 100%; position: fixed; left: 0; top: 0; right: 0; bottom: 0; z-index:  -webkit-transition: background 0.15s linear; -o-transition: background 0.15s linear; transition: background 0.15s linear;"></div>'+
                                // '</div> ');
                            },5000); 
                        }
                    });
                }
            }
        });

    });
});
