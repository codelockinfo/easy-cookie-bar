<?php
ob_start();
include_once('cls_header.php');
//include_once('../append/session.php');
$common_function = new common_function();

if (isset($_GET['store']) && $_GET['store'] != '') {
    $store_name = explode(".",$_GET['store'])[0];
    include_once('dashboard_header.php');
} else {
    header('Location:https://accounts.shopify.com/store-login');
}

?>

<body>
    <div>
        <div class="custom-model-main">
            <div class="custom-model-inner">        
                <div class="close-btn">×</div>
                <div class="custom-model-wrap">
                    <div class="pop-up-content-wrap">
                        <video autoplay="" loop="" controls="" width="100%">
                            <source type="video/mp4" src="<?php echo CLS_SITE_URL; ?>/assets/images/show_popup.mp4">
                        </video>
                        <div class="videocontent">
                            <ul>
                                <li>Click <b>Online Store -> Preferences</b> button.</li>
                                <li>Find <b>Customer privacy</b> section.</li>
                                <li>Select <b>Collected after consent</b> Radio button.</li>
                            </ul>
                        </div>
                        <div class="Polaris-ButtonGroup__Item cls-btn-setting">
                                    <button class="Polaris-Button Polaris-Button--primary cls-main-set" type="submt">
                                    <span class="Polaris-Button__Content">
                                    <span class="Polaris-Button__Text"><a class="btn-settings" href="https://admin.shopify.com/store/<?php echo $store_name; ?>/online_store/preferences">Go To Setting</a></span>
                                    </span>
                                    </button>
                        </div>
                    </div>
                </div>  
            </div>  
            <div class="bg-overlay"></div>
        </div> 
    </div>
    <div class="Polaris-Page pagemargin max_width_change bodycontainer">
     
        <form method="POST" id="cookies_bar_setting_save" onsubmit>
            <div class="Polaris-Page Polaris-Page--fullWidth" style="padding:0;">
                <div class="Polaris-Page__Content">
                    <div class="Polaris-Layout">
                        <div class="Polaris-Layout__AnnotatedSection">
                            <div class="Polaris-ButtonGroup" style="justify-content:end;margin: -1% 0 2% 0;">
                                <div class="Polaris-ButtonGroup__Item">
                                    <button class="Polaris-Button" type="cancel">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text">Cancel</span>
                                    </span>
                                    </button>
                                </div>
                                <div class="Polaris-ButtonGroup__Item">
                                    <button class="Polaris-Button Polaris-Button--primary save_loader_show" type="submit">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text">Save</span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                            <div class="Polaris-Layout__AnnotationWrapper ">
                                <div class="Polaris-Layout__Annotation Polaris-Card polarisboxshadow">
                                    <div class="Polaris-TextContainer">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--headingXl Cookiesett" id="storeDetails">Settings</h2>
                                            <div class="Polaris-Box" style="--pc-box-color:var(--p-color-text-subdued)">
                                                <p>Change and edit the text and settings of your banner.</p>
                                            </div>
                                            <div class="Polaris-LegacyStack__Item">
                                                <p class="Polaris-Text--root Polaris-Text--headingXl"color="warning">After every change, please make sure you clear your storefront cache for the changes to take effect.</p>
                                            </div>
                                    </div>
                                </div>
                                <div class="Polaris-Layout__AnnotationContent">
                                    <div class="Polaris-Card polarisboxshadow">
                                        <div class="Polaris-LegacyCard sectionmessage">
                                            <div class="Polaris-LegacyCard__Section">
                                                <div class="Polaris-FormLayout">
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="code-form-control layout-2-column "data-id="element16" data-default-value="">
                                                            <label class="classic-label globo-label "><span class="label-content" data-label="Radio">Show on</span><span></span></label>
                                                            <ul class="flex-wrap radiobutton">
                                                                <li class="globo-list-control option-1-column">
                                                                    <div class="radio-wrapper">
                                                                        <input class="radio-input" id="false-radio-1-Option 1-" type="radio" data-type="radio" name="showon" value="1">
                                                                        <label class="radio-label globo-option" for="false-radio-1-Option 1-">All Countries</label>
                                                                    </div>
                                                                </li>
                                                                <li class="globo-list-control option-1-column">
                                                                    <div class="radio-wrapper">
                                                                        <input class="radio-input" id="false-radio-1-Option 2-" type="radio" data-type="radio" name="showon" value="0">
                                                                        <label class="radio-label globo-option" for="false-radio-1-Option 2-">EU only</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label id="massagelabel" for="" class="Polaris-Label__Text">Message</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Connected">
                                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                
                                                                <div class="Polaris-TextField">
                                                                        <input id="massageText" name="message" autocomplete="off" class="Polaris-TextField__Input" type="text" aria-labelledby=":R1l9n6:Label" aria-invalid="false" value="This website uses cookies to ensure you get the best experience on our websit">
                                                                        <div class="Polaris-TextField__Backdrop">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label  for=":R2l9n6:" class="Polaris-Label__Text">Privacy Policy URL</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Connected">
                                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                    <div class="Polaris-TextField">
                                                                        <input id="privacyText" autocomplete="email" name="privacy_policy_url" class="Polaris-TextField__Input" type="text" aria-labelledby=":R2l9n6:Label" aria-invalid="false" value="">
                                                                        <div class="Polaris-TextField__Backdrop">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Polaris-FormLayout">
                                            <div role="group" class="Polaris-FormLayout--grouped">
                                                <div class="Polaris-FormLayout__Items">
                                                   
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label id="buttonLabel" for=":R3dn6:" class="Polaris-Label__Text">Agreement Text</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Connected">
                                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                    <div class="Polaris-TextField">
                                                                        <input id="buttonText" name="agreement_text" autocomplete="off" aria-labelledby=":R2l9n6:Label" class="Polaris-TextField__Input" type="text" aria-invalid="false">
                                                                            <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                                
                                                                            </div>
                                                                            <div class="Polaris-TextField__Backdrop">
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="declinebuttonLabel" for=":R3dn6:" class="Polaris-Label__Text">Decline Text</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="declinebuttonText" name="decline_text" autocomplete="off" aria-labelledby=":R2l9n6:Label" class="Polaris-TextField__Input" type="text" aria-invalid="false" value="Decline">
                                                                        <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                            
                                                                        </div>
                                                                        <div class="Polaris-TextField__Backdrop">
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label  class="Polaris-Label__Text">Privacy policy link text</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Connected">
                                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                    <div class="Polaris-TextField">
                                                                        <input id="linkText" name="privacy_policy_url_text" autocomplete="off" class="Polaris-TextField__Input" type="text" aria-labelledby=":R5dn6:Label" aria-invalid="false">
                                                                        <div class="Polaris-TextField__Backdrop">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="coutnry-select2">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label class="Polaris-Label__Text">Banner font size (px)</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Select Polaris-Select--placeholder">
                                                                <select class="Polaris-Select__Input widthSelect2" name="banner_fontsize">
                                                                    <option value="11px">11px</option>
                                                                    <option value="12px">12px</option>
                                                                    <option value="14px">14px</option>
                                                                    <option value="16px">16px</option>
                                                                    <option value="18px">18px</option>
                                                                    <option value="20px">20px</option>
                                                                    <option value="22px">22px</option>
                                                                    <option value="24px">24px</option>
                                                                    <option value="28px">28px</option>
                                                                    <option value="32px">32px</option>
                                                                </select>
                                                                <div class="Polaris-Select__Icon select-hide">
                                                                    <span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></div>
                                                                <div class="Polaris-Select__Backdrop select-hide"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="coutnry-select2">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label class="Polaris-Label__Text">Button Font Size (px)</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Select Polaris-Select--placeholder">
                                                                <select class="Polaris-Select__Input buttonFontSize" name="button_fontsize">
                                                                    <option value="11px">11px</option>
                                                                    <option value="12px">12px</option>
                                                                    <option value="14px">14px</option>
                                                                    <option value="16px">16px</option>
                                                                    <option value="18px">18px</option>
                                                                    <option value="20px">20px</option>
                                                                    <option value="22px">22px</option>
                                                                    <option value="24px">24px</option>
                                                                    <option value="28px">28px</option>
                                                                    <option value="32px">32px</option>
                                                                </select>
                                                                <div class="Polaris-Select__Icon select-hide">
                                                                    <span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></div>
                                                                <div class="Polaris-Select__Backdrop select-hide"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label class="Polaris-Label__Text">Button border width (px)</label></div>
                                                        </div>
                                                        <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="borwidth" name="button_border_width" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false" value="">
                                                            <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                <button role="button" class="Polaris-TextField__Segment bwup" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 12l-5-5-5 5z"></path></svg></span></div>
                                                                </button>
                                                                <button role="button" class="Polaris-TextField__Segment bwdown" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path></svg></span></div>
                                                                </button>
                                                            </div>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="coutnry-select2">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label class="Polaris-Label__Text">Position</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Select Polaris-Select--placeholder">
                                                                <select class="Polaris-Select__Input positionSelect2"  name="position">
                                                                    <option value="0">Bottom</option>
                                                                    <option value="1">Top</option>
                                                                
                                                                </select>
                                                                <div class="Polaris-Select__Icon select-hide">
                                                                    <span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></div>
                                                                <div class="Polaris-Select__Backdrop select-hide"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label class="Polaris-Label__Text">Button border radius (px)</label></div>
                                                        </div>
                                                        <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="borderrad" name="button_border_radius" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false" value="">
                                                            <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                <button role="button" class="Polaris-TextField__Segment bup" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 12l-5-5-5 5z"></path></svg></span></div>
                                                                </button>
                                                                <button role="button" class="Polaris-TextField__Segment bdown" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path></svg></span></div>
                                                                </button>
                                                            </div>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                    </div>

                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label class="Polaris-Label__Text">Banner height (px)</label></div>
                                                        </div>
                                                        <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="myNumber" name="banner_height" class="Polaris-TextField__Input" type="number"  aria-labelledby="TextField32Label" aria-invalid="false" min="45" aria-describedby="ruleContentError">
                                                            <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                <button role="button" class="Polaris-TextField__Segment up" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 12l-5-5-5 5z"></path></svg></span></div>
                                                                </button>
                                                                <button role="button" class="Polaris-TextField__Segment down" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path></svg></span></div>
                                                                </button>
                                                            </div>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                        

                                                        <div class="Polaris-Labelled__Error bannerheighterror hide">
                                                        <div id="ruleContentError" class="Polaris-InlineError">
                                                            <div class="Polaris-InlineError__Icon">
                                                            <span class="Polaris-Icon">
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path d="M10 6a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5a.75.75 0 0 1 .75-.75Z">
                                                                </path>
                                                                <path d="M11 13a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z">
                                                                </path>
                                                                <path fill-rule="evenodd" d="M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Zm-1.5 0a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0Z">
                                                                </path>
                                                                </svg>
                                                            </span>
                                                            </div>Value must be greater than or equal to 45</div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div  style=" padding: 1%;"> </div>
                            <div class="Polaris-Card__Section Polaris-Card">
                                <div class="quickflex">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--headingXl" id="storeDetails">Choose a color palette:</h2>
                                </div>
                                <div class="flex flex-wrap gap-1 bannerflex">
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground  h-8 w-11 p-1" style="background: rgb(255, 255, 255);">
                                            <div class="bannercolor  h-3 w-4 mt-2 ml-5" style="background: rgb(0, 0, 0);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(255, 252, 252);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(0, 239, 255);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: rgb(99, 113, 199);">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(0, 0, 0);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(241, 214, 0);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(234, 247, 247);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(86, 203, 219);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(37, 46, 57);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(20, 167, 208);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(0, 0, 0);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(0, 255, 0);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(57, 55, 163);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(230, 37, 118);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(35, 122, 252);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(248, 168, 255);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(250, 236, 236);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(109, 136, 138);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(56, 59, 117);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(241, 214, 0);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(29, 138, 138);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(98, 255, 170);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(237, 239, 245);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(75, 129, 232);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(52, 60, 102);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(247, 21, 89);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(33, 105, 66);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(175, 237, 113);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(60, 64, 77);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(139, 237, 79);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(235, 108, 68);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(245, 217, 72);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(239, 239, 239);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(142, 199, 96);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(245, 245, 245);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(106, 25, 125);"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div role="group" class="Polaris-Layout__AnnotatedSection bannerflex">
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\12.jpg" alt="" data-set="#22155D" data-value="#B3214F" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\9.webp" alt="" data-set="#BF0001" data-value="#A70202" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\8.webp" alt="" data-set="#016E62" data-value="#003236" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\4.jpg" alt="" data-set="#710B25" data-value="#230B23" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\5.jpg" alt="" data-set="#6238C0" data-value="#9933AC" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\6.webp" alt="" data-set="#8DD899" data-value="#3BB58A" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\13.jpg" alt="" data-set="#643793" data-value="#733B6E" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\14.webp" alt="" data-set="#D19487" data-value="#A37988" class="banner1">
                                    </div>
                                </div> -->
                            </div>
                            <div  style=" padding: 1%;"> </div>
                            <div class="Polaris-Layout__AnnotationWrapper">
                                <div class="Polaris-Layout__Annotation Polaris-Card polarisboxshadow">
                                    <div class="Polaris-TextContainer">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--headingXl" id="storeDetails">Design Settings Layout</h2>
                                            <div class="Polaris-Select Polaris-Select--placeholder">
                                                <select class="Polaris-Select__Input layoutSelect2" name="layout">
                                                    <option value="0">Banner</option>
                                                    <option value="1">Pop-up</option>
                                                </select>
                                                <div class="Polaris-Select__Icon select-hide">
                                                    <span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></div>
                                                <div class="Polaris-Select__Backdrop select-hide"></div>
                                            </div>
                                            <div class="Polaris-Box" style="--pc-box-color:var(--p-color-text-subdued)">
                                                <p>Change the design of your banner.</p>
                                            </div>
                                            <hr>
                                            <div class="Polaris-FormLayout">
                                                <div role="group" class="Polaris-FormLayout--grouped">
                                                    <div class="Polaris-FormLayout__Items" >
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_banner"  id="colorPickerbutton3" class="color_circle">
                                                                            <input type="hidden" id="colorCodebutton3">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Banner</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_banner_text" id="bannerTextback" class="color_circle">
                                                                            <input type="hidden" id="bannerText">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Banner Text</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Items" >
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_banner_link"  id="bannertextlink" class="color_circle">
                                                                            <input type="hidden" id="bannerlink">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Banner Link</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_button" id="buttonbackcolor" class="color_circle">
                                                                            <input type="hidden" id="buttoncolor">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Button</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Items" >
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_button_text" id="buttontextcolor" class="color_circle">
                                                                            <input type="hidden" id="buttontext">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Button Text</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_button_border" id="buttonbordercolor" class="color_circle">
                                                                            <input type="hidden" id="buttonborder">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>

                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Button Border</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="Polaris-Layout__AnnotationContent">
                                    <div class="Polaris-Card" style="height:100%;">
                                        <div class="backimg">
                                            <div class="preview-cookie-bar">
                                                <div class="preview_set" style="background-color: rgb(244, 143, 177); color: rgb(49, 27, 146);">
                                                    <div class="seven displayflex">
                                                        <div class="cookie_svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 31 30" fill="none">
                                                                <path d="M30.7226 12.225C30.6466 11.8219 30.3194 11.5163 29.9126 11.4675C29.5047 11.4188 29.1157 11.6391 28.9469 12.0131C28.6497 12.6694 27.9972 13.1259 27.2407 13.125C26.4016 13.1269 25.6929 12.5606 25.4566 11.7834C25.3141 11.3091 24.8266 11.0278 24.3447 11.1403C24.0485 11.2097 23.7682 11.25 23.4897 11.25C21.4244 11.2463 19.7435 9.56531 19.7397 7.5C19.7397 7.22156 19.7801 6.94125 19.8494 6.64594C19.9629 6.16406 19.6807 5.67562 19.2063 5.53312C18.4291 5.29781 17.8629 4.58906 17.8647 3.75C17.8638 2.9925 18.3204 2.34094 18.9766 2.04375C19.3507 1.875 19.571 1.485 19.5222 1.07812C19.4735 0.670312 19.1679 0.343125 18.7647 0.267188C17.8704 0.099375 16.9441 0 15.9897 0C7.71537 0.001875 0.991621 6.72563 0.989746 15C0.991621 23.2744 7.71537 29.9981 15.9897 30C24.2641 29.9981 30.9879 23.2744 30.9897 15C30.9897 14.0456 30.8904 13.1194 30.7226 12.225ZM25.2663 24.2766C22.886 26.655 19.6104 28.125 15.9897 28.125C12.3691 28.125 9.0935 26.655 6.71318 24.2766C4.33475 21.8962 2.86475 18.6206 2.86475 15C2.86475 11.3794 4.33475 8.10375 6.71318 5.72344C9.0935 3.345 12.3691 1.875 15.9897 1.875C16.1585 1.875 16.3235 1.89281 16.4913 1.90031C16.1782 2.44594 15.9907 3.07406 15.9897 3.75C15.9916 5.14969 16.7679 6.34969 17.8994 6.99C17.8816 7.15687 17.8647 7.32375 17.8647 7.5C17.8666 10.6041 20.3857 13.1231 23.4897 13.125C23.666 13.125 23.8329 13.1081 23.9997 13.0903C24.6401 14.2209 25.8391 14.9981 27.2397 15C27.9157 14.9991 28.5438 14.8116 29.0894 14.4984C29.0969 14.6653 29.1147 14.8313 29.1147 15C29.1147 18.6206 27.6447 21.8962 25.2663 24.2766Z" fill="#2C332F"></path><path d="M12.2397 9.375C13.2753 9.375 14.1147 8.53553 14.1147 7.5C14.1147 6.46447 13.2753 5.625 12.2397 5.625C11.2042 5.625 10.3647 6.46447 10.3647 7.5C10.3647 8.53553 11.2042 9.375 12.2397 9.375Z" fill="#2C332F"></path><path d="M8.48975 16.875C9.52528 16.875 10.3647 16.0355 10.3647 15C10.3647 13.9645 9.52528 13.125 8.48975 13.125C7.45421 13.125 6.61475 13.9645 6.61475 15C6.61475 16.0355 7.45421 16.875 8.48975 16.875Z" fill="#2C332F"></path><path d="M17.8647 24.375C18.9003 24.375 19.7397 23.5355 19.7397 22.5C19.7397 21.4645 18.9003 20.625 17.8647 20.625C16.8292 20.625 15.9897 21.4645 15.9897 22.5C15.9897 23.5355 16.8292 24.375 17.8647 24.375Z" fill="#2C332F"></path><path d="M16.9272 16.875C17.445 16.875 17.8647 16.4553 17.8647 15.9375C17.8647 15.4197 17.445 15 16.9272 15C16.4095 15 15.9897 15.4197 15.9897 15.9375C15.9897 16.4553 16.4095 16.875 16.9272 16.875Z" fill="#2C332F"></path><path d="M24.4272 20.625C24.945 20.625 25.3647 20.2053 25.3647 19.6875C25.3647 19.1697 24.945 18.75 24.4272 18.75C23.9095 18.75 23.4897 19.1697 23.4897 19.6875C23.4897 20.2053 23.9095 20.625 24.4272 20.625Z" fill="#2C332F"></path><path d="M11.3022 22.5C11.82 22.5 12.2397 22.0803 12.2397 21.5625C12.2397 21.0447 11.82 20.625 11.3022 20.625C10.7845 20.625 10.3647 21.0447 10.3647 21.5625C10.3647 22.0803 10.7845 22.5 11.3022 22.5Z" fill="#2C332F"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="bar-text-wrapper">
                                                        <span class="bar-message">This website uses cookies to ensure you get the best experience on our website.</span>
                                                        <span class="bar-link"><a class="cc-link" href="https://payalcls.myshopify.com/policies/privacy-policy" target="_blank" style="color: rgb(255, 204, 128);">Learn More</a></span>
                                                        </span>
                                                    </div>
                                                    <div class="three">
                                                        <a class="cc-dismiss deny" style="color: rgb(2, 136, 209); background-color: rgb(49, 27, 146); border-color: rgb(48, 63, 159);"></a>
                                                        <a class="cc-dismiss allow" style="color: rgb(2, 136, 209); background-color: rgb(49, 27, 146); border-color: rgb(48, 63, 159);"></a>
                                                    </div>
                                                    <span class="cc-close" id="buttonclose">✕</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Polaris-ButtonGroup buttonbottom">
                                <div class="Polaris-ButtonGroup__Item">
                                    <button class="Polaris-Button" type="cancel">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text">Cancel</span>
                                    </span>
                                    </button>
                                </div>
                                <div class="Polaris-ButtonGroup__Item">
                                    <button class="Polaris-Button Polaris-Button--primary save_loader_show" type="submt">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text">Save</span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="footermargin">
        <div class="Polaris-FooterHelp__Text footermargin footer_border">
                Easy Cookie Bar - GDPR EU©2023 
                <!-- - Developed by<a target="_blank" href="http://codelocksolutions.com/" style="margin:0 5px;">Codelock Solutions</a>  team  -->
        </div> 
    </div>
</body>
</html> 

<?php include_once('dashboard_footer.php'); ?>
<script>
    cookies_bar_setting_save_first();
    cookies_bar_setting_select();
    console.log("On load dashbaord page");
</script>