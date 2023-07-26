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

include('https://codelocksolutions.com/easy-cookie-bar/assets/js/jquery-3.6.4.min.js', function() {
    $(document).ready(function() {
        console.log("Easy Cookie Banner - GDPR EU");
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
                                $("body").append(
                                    '<div id="cookies-banner">'+
                                    '<span>This website uses cookies to ensure you get the best experience on our website.</span>'+
                                    '<button style="margin-left: 1em;" onclick="handleDecline()">Decline</button>'+
                                    '<button style="margin-left: 1em;" onclick="handleAccept()">Accept</button>'+
                                    '</div>'
                                );
                            },5000); 
                        }
                    });
                }
            }
        });
        function getBannerEl() {
            return document.getElementById('cookies-banner');
          }
        
          function hideBanner(res) {
            getBannerEl().style.display = 'none';
          }
        
          function showBanner() {
           getBannerEl().style.display = 'block';
          }
        
          function handleAccept(e) {
            window.Shopify.customerPrivacy.setTrackingConsent(true, hideBanner);
        
            document.addEventListener('trackingConsentAccepted',function() {
              console.log('trackingConsentAccepted event fired');
            });
          }
        
          function handleDecline() {
            window.Shopify.customerPrivacy.setTrackingConsent(false,hideBanner);
          }
        
          function initCookieBanner() {
            const userCanBeTracked = window.Shopify.customerPrivacy.userCanBeTracked();
            const userTrackingConsent = window.Shopify.customerPrivacy.getTrackingConsent();
        
            if(!userCanBeTracked && userTrackingConsent === 'no_interaction') {
              showBanner();
            }
          }
        
          window.Shopify.loadFeatures([
            {
              name: 'consent-tracking-api',
              version: '0.1',
            }
          ],
          function(error) {
            if (error) {
              throw error;
            }
        
            initCookieBanner();
        });
    });
    
});
