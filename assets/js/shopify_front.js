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
              console.log("COMEBACK");
              console.log(comeback);
              console.log(comeback.outcome);
              console.log(comeback.outcome.data);
              console.log(comeback.outcome.data[0]);
              console.log(comeback.outcome.data[0].application_status);
              console.log(comeback.outcome.application_status +".....STATUS");
              console.log(comeback.outcome.status +".....STATUS");
              console.log(comeback['outcome']['data']['0']['application_status']);
              $status = comeback.outcome.data[0].application_status !== undefined ? comeback.outcome.data[0].application_status : '';
              if ($status == 1) {
                  cookiesbarSettingSelect();
              }
            }
        });    
        function  cookiesbarSettingSelect(){
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
                console.log(comeback.outcome.showon);
                var layoutPopup = "";
                var modalPreview = "";
                if( comeback.outcome.layout == 1){
                  var layoutPopup = "modal-wrapper open";
                  var modalPreview = "modal_preview";
                  var height = comeback.outcome.popup_height;
                }else{
                  var height = comeback.outcome.banner_height;

                }
                var decline_text = comeback.outcome.decline_text !== '' ? comeback.outcome.decline_text : "Decline";
                var agreement_text = comeback.outcome.agreement_text !== '' ? comeback.outcome.agreement_text : "Agree";
                var popuposition = comeback.outcome.position == 1 ? "top" : "bottom";
                console.log(popuposition);
                if(comeback.outcome.showon == 1){
                  $myVar = setInterval(initCookieBannerforAll, 1000);
                }else{
                  $myVar = setInterval(initCookieBanner, 1000);
                }
                $("body").append('<style>.displayflex{display:flex;}.modal_preview{position: absolute;}.modal_preview .cc-close{position: absolute;top: 10px;right: 10px;}.preview_set{display: flex;justify-content: space-between;}.preview_set .cc-close{cursor: pointer;margin-left: 0.5em;font-size: 20px;font-weight: 700;}.preview_set .seven{flex: 1 1 auto;}.modal_preview .three{width: 100%;text-align: center;}.modal_preview{width: 500px;flex-wrap: wrap;}.modal-wrapper.open{visibility: visible;opacity: 1;}.modal-wrapper{display: flex;z-index: 999;width: 100%;height: 100%;visibility: hidden;top: 0;left: 0;opacity: 0;filter: alpha(opacity=0);-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;}@media(max-width:1200px){.preview_set .seven{width: 65%;}.preview_set .three{width: 35%;text-align: end;}}@media(max-width:550px){.preview_set{display: block;}.preview_set .seven{width: 100%;}.preview_set .three{width: 90%;text-align: end;}.preview_set .cc-close{float: right;top: -32px;position: relative;} }</style>'+
                  '<div id="cookies-banner" class="'+ layoutPopup +'" style="display: none;z-index:999;justify-content: center;align-items: center;padding: 1em;position:fixed;width: 100%;'+ popuposition +': 0px;">'+
                    '<div  class="preview_set '+ modalPreview +'" style="padding: 13px 6px;align-items: center;height:'+  height +'px;color:'+ comeback.outcome.color_banner_text	+';background:'+ comeback.outcome.color_banner +'; border-top: 1px solid #dcdcdc;'+ popuposition +': 0px;">'+
                    '<div class="seven displayflex">'+
                    '<div class="cookie_svg">'+
                        '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 31 30" fill="none">'+
                            '<path d="M30.7226 12.225C30.6466 11.8219 30.3194 11.5163 29.9126 11.4675C29.5047 11.4188 29.1157 11.6391 28.9469 12.0131C28.6497 12.6694 27.9972 13.1259 27.2407 13.125C26.4016 13.1269 25.6929 12.5606 25.4566 11.7834C25.3141 11.3091 24.8266 11.0278 24.3447 11.1403C24.0485 11.2097 23.7682 11.25 23.4897 11.25C21.4244 11.2463 19.7435 9.56531 19.7397 7.5C19.7397 7.22156 19.7801 6.94125 19.8494 6.64594C19.9629 6.16406 19.6807 5.67562 19.2063 5.53312C18.4291 5.29781 17.8629 4.58906 17.8647 3.75C17.8638 2.9925 18.3204 2.34094 18.9766 2.04375C19.3507 1.875 19.571 1.485 19.5222 1.07812C19.4735 0.670312 19.1679 0.343125 18.7647 0.267188C17.8704 0.099375 16.9441 0 15.9897 0C7.71537 0.001875 0.991621 6.72563 0.989746 15C0.991621 23.2744 7.71537 29.9981 15.9897 30C24.2641 29.9981 30.9879 23.2744 30.9897 15C30.9897 14.0456 30.8904 13.1194 30.7226 12.225ZM25.2663 24.2766C22.886 26.655 19.6104 28.125 15.9897 28.125C12.3691 28.125 9.0935 26.655 6.71318 24.2766C4.33475 21.8962 2.86475 18.6206 2.86475 15C2.86475 11.3794 4.33475 8.10375 6.71318 5.72344C9.0935 3.345 12.3691 1.875 15.9897 1.875C16.1585 1.875 16.3235 1.89281 16.4913 1.90031C16.1782 2.44594 15.9907 3.07406 15.9897 3.75C15.9916 5.14969 16.7679 6.34969 17.8994 6.99C17.8816 7.15687 17.8647 7.32375 17.8647 7.5C17.8666 10.6041 20.3857 13.1231 23.4897 13.125C23.666 13.125 23.8329 13.1081 23.9997 13.0903C24.6401 14.2209 25.8391 14.9981 27.2397 15C27.9157 14.9991 28.5438 14.8116 29.0894 14.4984C29.0969 14.6653 29.1147 14.8313 29.1147 15C29.1147 18.6206 27.6447 21.8962 25.2663 24.2766Z" fill="#2C332F"></path><path d="M12.2397 9.375C13.2753 9.375 14.1147 8.53553 14.1147 7.5C14.1147 6.46447 13.2753 5.625 12.2397 5.625C11.2042 5.625 10.3647 6.46447 10.3647 7.5C10.3647 8.53553 11.2042 9.375 12.2397 9.375Z" fill="#2C332F"></path><path d="M8.48975 16.875C9.52528 16.875 10.3647 16.0355 10.3647 15C10.3647 13.9645 9.52528 13.125 8.48975 13.125C7.45421 13.125 6.61475 13.9645 6.61475 15C6.61475 16.0355 7.45421 16.875 8.48975 16.875Z" fill="#2C332F"></path><path d="M17.8647 24.375C18.9003 24.375 19.7397 23.5355 19.7397 22.5C19.7397 21.4645 18.9003 20.625 17.8647 20.625C16.8292 20.625 15.9897 21.4645 15.9897 22.5C15.9897 23.5355 16.8292 24.375 17.8647 24.375Z" fill="#2C332F"></path><path d="M16.9272 16.875C17.445 16.875 17.8647 16.4553 17.8647 15.9375C17.8647 15.4197 17.445 15 16.9272 15C16.4095 15 15.9897 15.4197 15.9897 15.9375C15.9897 16.4553 16.4095 16.875 16.9272 16.875Z" fill="#2C332F"></path><path d="M24.4272 20.625C24.945 20.625 25.3647 20.2053 25.3647 19.6875C25.3647 19.1697 24.945 18.75 24.4272 18.75C23.9095 18.75 23.4897 19.1697 23.4897 19.6875C23.4897 20.2053 23.9095 20.625 24.4272 20.625Z" fill="#2C332F"></path><path d="M11.3022 22.5C11.82 22.5 12.2397 22.0803 12.2397 21.5625C12.2397 21.0447 11.82 20.625 11.3022 20.625C10.7845 20.625 10.3647 21.0447 10.3647 21.5625C10.3647 22.0803 10.7845 22.5 11.3022 22.5Z" fill="#2C332F"></path>'+
                        '</svg>'+
                    '</div>'+
                    '<span class="bar-text-wrapper">'+
                    '<span class="bar-message" style="font-size:'+  comeback.outcome.banner_fontsize +'">'+ comeback.outcome.message +'</span>&nbsp;'+
                    '<span class="bar-link"><a class="cc-link" href="'+ comeback.outcome.privacy_policy_url +'" target="_blank" style="text-decoration: underline;color:'+ comeback.outcome.color_banner_link  +'">'+ comeback.outcome.privacy_policy_url_text +'</a></span>'+
                    '</span>'+
                '</div>'+
                ' <div class="three">'+
                '<a class="cc-dismiss handleAccept allow" style="cursor: pointer;padding:7px 15px;color:'+ comeback.outcome.color_button_text +'; background-color:'+  comeback.outcome.color_button  +'; border-color: '+  comeback.outcome.color_button_border  +';border-radius:'+  comeback.outcome.button_border_radius  +'px;border:'+ comeback.outcome.button_border_width  +'px solid;font-size:'+  comeback.outcome.button_fontsize +';">'+ decline_text +'</a>'+
                    '<a class="cc-dismiss handleDecline deny" style="cursor: pointer;margin-left: 0.5em;padding:7px 15px;color:'+ comeback.outcome.color_button_text +'; background-color:'+  comeback.outcome.color_button  +'; border-color: '+  comeback.outcome.color_button_border  +';border-radius:'+  comeback.outcome.button_border_radius  +'px;border:'+ comeback.outcome.button_border_width  +'px solid;font-size:'+  comeback.outcome.button_fontsize +';">'+ agreement_text +'</a>'+
                '</div>'+
                '<span class="cc-close">✕</span>'+
                '</div>'
                );
              }
          });
        }
    $(document).on("click", ".cc-close", function() {
        console.log("CLOSE click");
        document.getElementById('cookies-banner').style.display = 'none';
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
      console.log("show banner");
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
        showBanner();
      }else{
        clearInterval($myVar);
      }
    }
    function initCookieBannerforAll() {
      const userCanBeTracked = window.Shopify.customerPrivacy.userCanBeTracked();
      const userTrackingConsent = window.Shopify.customerPrivacy.getTrackingConsent();
  
      console.log(userTrackingConsent + "   TRACKING FOR ALL" );
      console.log(userCanBeTracked + "   TRACKED FOR ALL");
      if(userTrackingConsent === 'no_interaction') {
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
        // $myVar = setInterval(initCookieBanner, 1000);
          // initCookieBanner();
      });
    
    });
        
});
