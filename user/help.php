<?php include_once('cls_header.php'); ?>
<div class="Polaris-Page">
    <div class="Polaris-Page__Header Polaris-Page__Header--hasBreadcrumbs Polaris-Page__Header--hasSecondaryActions Polaris-Page__Header--hasSeparator">
        <div class="Polaris-Page__MainContent">
            <div class="Polaris-Page__TitleAndActions">
                <div class="Polaris-Page__Title">
                    <h1 class="Polaris-DisplayText Polaris-DisplayText--sizeLarge"><?php _e("Support/FAQ"); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="Polaris-Page__Content">
        <div class="Polaris-Layout">
            <div class="Polaris-Layout__Section">
                <div class="Polaris-Card">
                    <div class="Polaris-Card__Header">
                        <h2 class="Polaris-Heading">Online shop dashboard</h2>
                    </div>
                    <div class="Polaris-Card__Section">
                        <div class="Polaris-Car d vertical-tabs">
                            <div>
                                <ul role="tablist" class="Polaris-Tabs Polaris-Tabs--fillSpace">
                                    <li role="presentation" class="Polaris-Tabs__TabContainer">
                                        <button id="all-consumersMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab Polaris-Tabs__Tab--selected" aria-selected="true" onclick="replaceTab(event, 'all_tab')">
                                            <span class="app"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 11h-4v4H9v-4H5V9h4V5h2v4h4v2zm-5-9a8 8 0 1 0 0 16 8 8 0 0 0 0-16z" fill-rule="evenodd" fill="#50b83c"></path></svg></span></span>
                                            <span class="Polaris-Tabs__Title">Lorem ipsum dolor sit amet</span>
                                        </button>
                                    </li>
                                    <li role="presentation" class="Polaris-Tabs__TabContainer">
                                        <button id="accepts-marketingMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" onclick="replaceTab(event, 'acceps_marketing_tab')">
                                            <span class="app"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 11h-4v4H9v-4H5V9h4V5h2v4h4v2zm-5-9a8 8 0 1 0 0 16 8 8 0 0 0 0-16z" fill-rule="evenodd" fill="#50b83c"></path></svg></span></span>
                                            <span class="Polaris-Tabs__Title">Lorem ipsum dolor sit amet</span>
                                        </button>
                                    </li>
                                    <li role="presentation" class="Polaris-Tabs__TabContainer">
                                        <button id="repeat-consumersMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" onclick="replaceTab(event, 'repeat_consumers_tab')">
                                            <span class="app"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 11h-4v4H9v-4H5V9h4V5h2v4h4v2zm-5-9a8 8 0 1 0 0 16 8 8 0 0 0 0-16z" fill-rule="evenodd" fill="#50b83c"></path></svg></span></span>
                                            <span class="Polaris-Tabs__Title">Lorem ipsum dolor sit amet<span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div id="all_tab" class="Polaris-Card__Section Polaris-Tabs_tabcontent first">
                                <div class="Polaris-Layout">
                                    <div class="Polaris-Layout__Section">
                                        <div class="Polaris-Card">
                                            <div class="Polaris-Card__Header">
                                                <h2 class="Polaris-Heading">Online shop dashboard</h2>
                                            </div>
                                            <div class="Polaris-Card__Section">
                                                <p>View a summary of your online shop’s performance.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="acceps_marketing_tab" class="Polaris-Card__Section Polaris-Tabs_tabcontent">
                                <div class="Polaris-Layout">
                                    <div class="Polaris-Layout__Section">
                                        <div class="Polaris-Card">
                                            <div class="Polaris-Card__Header">
                                                <h2 class="Polaris-Heading">Online shop dashboard All</h2>
                                            </div>
                                            <div class="Polaris-Card__Section">
                                                <p>View a summary of your online shop’s performance.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="repeat_consumers_tab" class="Polaris-Card__Section Polaris-Tabs_tabcontent">
                                <div class="Polaris-Layout">
                                    <div class="Polaris-Layout__Section">
                                        <div class="Polaris-Card">
                                            <div class="Polaris-Card__Header">
                                                <h2 class="Polaris-Heading">Online shop dashboard</h2>
                                            </div>
                                            <div class="Polaris-Card__Section">
                                                <p>View a summary of your online shop’s performance accepts marketing.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-Card">
                    <div class="Polaris-Card__Header">
                        <h2 class="Polaris-Heading">FAQ</h2>
                    </div>
                    <div class="Polaris-Card__Section">
                        <div id="accordion" class="accordion">
                            <div class="card mb-2">
                                <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <a class="card-title">
                                       Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion" >
                                    <div class="card-body">
                                      <div class="row">
                                            <div class="col-sm-6">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                            <div class="col-sm-6">  
                                                <a href="../assets/images/default-image.png" target="_BLANK">
                                                    <img src="../assets/images/default-image.png" alt="Avatar" class="image">
                                                    <div class="overlay">
                                                        <div class="text">
                                                            <h5 class="cover_text">
                                                                <i class="fa fa-search-plus cover_symbol"></i>
                                                                <br><?php _e("Click here to zoom"); ?>
                                                            </h5> 
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <a class="card-title">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion" >
                                    <div class="card-body">
                                       <div class="row">
                                            <div class="col-sm-6">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                            <div class="col-sm-6">  
                                                <a href="../assets/images/default-image.png" target="_BLANK">
                                                    <img src="../assets/images/default-image.png" alt="Avatar" class="image">
                                                    <div class="overlay">
                                                        <div class="text">
                                                            <h5 class="cover_text">
                                                                <i class="fa fa-search-plus cover_symbol"></i>
                                                                <br><?php _e("Click here to zoom"); ?>
                                                            </h5> 
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <a class="card-title">
                                      Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion" >
                                    <div class="card-body">
                                       <div class="row">
                                            <div class="col-sm-6">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                            <div class="col-sm-6">  
                                                <a href="../assets/images/default-image.png" target="_BLANK">
                                                    <img src="../assets/images/default-image.png" alt="Avatar" class="image">
                                                    <div class="overlay">
                                                        <div class="text">
                                                            <h5 class="cover_text">
                                                                <i class="fa fa-search-plus cover_symbol"></i>
                                                                <br><?php _e("Click here to zoom"); ?>
                                                            </h5> 
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <a class="card-title">
                                      Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion" >
                                    <div class="card-body">
                                       <div class="row">
                                            <div class="col-sm-6">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                            <div class="col-sm-6">  
                                                <a href="../assets/images/default-image.png" target="_BLANK">
                                                    <img src="../assets/images/default-image.png" alt="Avatar" class="image">
                                                    <div class="overlay">
                                                        <div class="text">
                                                            <h5 class="cover_text">
                                                                <i class="fa fa-search-plus cover_symbol"></i>
                                                                <br><?php _e("Click here to zoom"); ?>
                                                            </h5> 
                                                        </div>
                                                    </div>
                                                </a>
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
    </div>
    <div class="Polaris-Banner Polaris-Banner--statusInfo Polaris-Banner--withinPage" tabindex="0" role="status" aria-live="polite" aria-labelledby="Banner18Heading" aria-describedby="Banner18Content">
        <div class="Polaris-Banner__Ribbon"><span class="Polaris-Icon Polaris-Icon--colorTealDark Polaris-Icon--hasBackdrop"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><g fill-rule="evenodd"><circle cx="10" cy="10" r="9" fill="currentColor"></circle><path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8m1-5v-3a1 1 0 0 0-1-1H9a1 1 0 1 0 0 2v3a1 1 0 0 0 1 1h1a1 1 0 1 0 0-2m-1-5.9a1.1 1.1 0 1 0 0-2.2 1.1 1.1 0 0 0 0 2.2"></path></g></svg></span></div>
        <div>
            <div class="Polaris-Banner__Heading" id="Banner18Heading">
                <p class="Polaris-Heading"><?php _e("Need any other help?"); ?></p>
            </div>
            <div class="Polaris-Banner__Content" id="Banner6Content">
                <p><?php _e("We are always here to help you. Please "); ?><a class="Polaris-Link openChatBox" href="javascript:void(0);"><?php _e("email us"); ?></a><?php _e(" or contact us via the live chat support at the bottom right corner of the screen."); ?></p>
            </div>
        </div>
    </div>
    <?php include_once('cls_footer.php'); ?>