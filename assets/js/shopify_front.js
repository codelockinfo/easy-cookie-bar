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
                                $("body").append(
                                    '<div id="cookies-banner" style="display: none;justify-content: center;align-items: center;  padding: 1em;position: fixed;bottom: 0px; width: 100%;background: #fff; border-top: 1px solid #dcdcdc;">'+
                                    '<span>This website uses cookies to ensure you get the best experience on our website.</span>'+
                                    '<button class="handleDecline" style="margin-left: 1em;" >Decline</button>'+
                                    '<button class="handleAccept" style="margin-left: 1em;" >Accept</button>'+
                                    '</div>'
                                );
                        }
                    });
                }
            }
        });
    });
            
    $(document).on("click", ".handleDecline", function() {
        console.log("handleDecline click");
        handleDecline();  
    });
    $(document).on("click", ".handleAccept", function(event) {
        console.log("handleAccept click ");
        handleAccept(event);  
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
        console.log("handleAccept");
        window.Shopify.customerPrivacy.setTrackingConsent(true, hideBanner);
    
        document.addEventListener('trackingConsentAccepted',function() {
          console.log('trackingConsentAccepted event fired');
        });
      }
    
      function handleDecline() {
        console.log("handleDecline");
        window.Shopify.customerPrivacy.setTrackingConsent(false,hideBanner);
      }
    
      function initCookieBanner() {
        console.log("initCookieBanner");
        const userCanBeTracked = window.Shopify.customerPrivacy.userCanBeTracked();
        const checkBannerShow = window.Shopify.customerPrivacy.shouldShowBanner();
        console.log(checkBannerShow + " checkBannerShow");
        const userTrackingConsent = window.Shopify.customerPrivacy.getTrackingConsent();

        window.Shopify.customerPrivacy.setTrackingConsent(
          {
            "analytics":    true | false,
            "marketing":    true | false,
            "preferences":  true | false,
            "sale_of_data": true | false
          },
          () => console.log("Consent captured")
        );
        
    
        console.log(userTrackingConsent + "   TRACKING " );
        console.log(userCanBeTracked + "   TRACKED ");
        if(!userCanBeTracked && userTrackingConsent === 'no_interaction') {
            console.log("show banner");
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
