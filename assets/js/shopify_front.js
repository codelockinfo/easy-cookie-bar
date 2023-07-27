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
                          var comeback = JSON.parse(comeback);
                          console.log(comeback);
                                $("body").append(
                                  '<div id="cookies-banner" style="display: none;z-index:99;justify-content: center;align-items: center;padding: 1em;position:fixed;bottom: 0px; width: 100%;">'+
                                    '<div  class="preview_set" style="padding: 13px 6px;display: flex;align-items: center;justify-content: center;height:'+  comeback.banner_height+';color:'+ comeback.outcome.color_banner_text	+';background:'+ comeback.outcome.color_banner +'; border-top: 1px solid #dcdcdc;">'+
                                    '<div class="seven">'+
                                    '<span class="bar-text-wrapper">'+
                                    '<span class="bar-message" style="font-size:'+  comeback.outcome.banner_fontsize +'">'+ comeback.outcome.message +'</span>&nbsp;'+
                                    '<span class="bar-link"><a class="cc-link" href="'+ comeback.outcome.privacy_policy_url +'" target="_blank" style="text-decoration: underline;color:'+ comeback.outcome.color_banner_link  +'">'+ comeback.outcome.privacy_policy_url_text +'</a></span>'+
                                    '</span>'+
                                '</div>'+
                                ' <div class="three" style="width: 30%;">'+
                                    '<a class="cc-dismiss handleAccept" style="padding:7px 15px;float: right;color:'+ comeback.outcome.color_button_text +'; background-color:'+  comeback.outcome.color_button  +'; border-color: '+  comeback.outcome.color_button_border  +';border-radius:'+  comeback.outcome.button_border_radius  +';border:'+ comeback.outcome.border  +';">'+ comeback.outcome.agreement_text +'</a>'+
                                '</div>'+
                                '</div>'
                                );
                        }
                    });
                }
            }
        });    
    $(document).on("click", ".handleDecline", function() {
        console.log("handleDecline click");
        handleDecline();  
    });
    $(document).on("click", ".handleAccept", function(event) {
        console.log("handleAccept click ");
        handleAccept(event);  
    });
      
    function hideBanner(res) {
      var getBannerEl =  document.getElementById('cookies-banner');
      console.log(getBannerEl);
        if(getBannerEl !== null){
          console.log("in if ");
          getBannerEl.style.display = 'none';
          clearInterval($myVar);
        }
    }
  
    function showBanner() {
      var getBannerEl =  document.getElementById('cookies-banner');
      console.log(getBannerEl);
      if(getBannerEl !== null){
        console.log("in if ");
        getBannerEl.style.display = 'block';
        clearInterval($myVar);
      }
    }
    
    function handleAccept(e) {
      console.log("handleAccept");
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
  
      console.log(userTrackingConsent + "   TRACKING " );
      console.log(userCanBeTracked + "   TRACKED");
      if(!userCanBeTracked && userTrackingConsent === 'no_interaction') {
          console.log("show banner");
        showBanner();
      }else{
        clearInterval($myVar);
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
        $myVar = setInterval(initCookieBanner, 1000);
          // initCookieBanner();
      });
    
    });
        
});
