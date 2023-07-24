 </head>
    <body>
        <div class="Polaris-Page__Header Polaris-Page__Header--hasPagination Polaris-Page__Header--hasBreadcrumbs Polaris-Page__Header--hasRollup Polaris-Page__Header--hasSecondaryActions" style="padding-bottom: 2.4rem;box-shadow: 0px 1px #dfe3e8;">
            <div class="Polaris-Page Polaris-Page--fullWidth">
                <div class="Polaris-Page-Header Polaris-Page-Header__Header--hasBreadcrumbs">
                    <div class="Polaris-Page-Header__MainContent polaris-nav-menu">
                        <div class="Polaris-Page-Header__TitleAndActions">
                            <div class="Polaris-Page__Title">
                                <a href="dashboard.php?store=<?php echo $_SESSION['store']; ?>" class="Polaris-DisplayText Polaris-DisplayText--sizeLarge">CLS-REWRITER</a>
                            </div>
                        </div>
<!--     <div class="Polaris-Page-Header__PrimaryAction">
         <a class="Polaris-Button" href="dashboard.php?store=<?php  echo $_SESSION['store'];?>">
            <span class="Polaris-Button__Content">
                <span>Dashboard</span>
            </span>
        </a>
    </div>                        -->
<!--    <div class="Polaris-Page-Header__PrimaryAction">
        <a class="Polaris-Button" href="blog_post.php?store=<?php  echo  $_SESSION['store'];?>">
            <span class="Polaris-Button__Content">
                <span>BlogPost</span>
            </span>
        </a>
    </div>-->
<!--    <div class="Polaris-Page-Header__PrimaryAction">
        <a class="Polaris-Button" href="pages.php?store=<?php echo $_SESSION['store'];?>">
            <span class="Polaris-Button__Content">
                <span>Pages</span>
            </span>
        </a>
    </div>
    <div class="Polaris-Page-Header__PrimaryAction">
        <a class="Polaris-Button" href="products.php?store=<?php echo $_SESSION['store'];?>">
            <span class="Polaris-Button__Content">
                <span>Products</span>
            </span>
        </a>
    </div>
    <div class="Polaris-Page-Header__PrimaryAction">
        <a class="Polaris-Button" href="collection.php?store=<?php echo $_SESSION['store']; ?>">
            <span class="Polaris-Button__Content">
                <span>Collection</span>
            </span>
        </a>
    </div>-->
    <button type="button" class="Polaris-Button bootstrap-navbar" data-toggle="popover"  data-container="body" data-placement="bottom" data-html="true" id="form-components" tabindex="0" aria-haspopup="true" aria-expanded="false">
        <span class="Polaris-Button__Content"><span>Menu</span>
            <span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path></svg></span></span></span>
    </button>                    
    <div class="Polaris-Popover__Wrapper" style="display: none">
        <div id="popover-content-form-components" tabindex="-1" class="Polaris-Popover__Content">
            <div class="Polaris-Popover__Pane Polaris-Scrollable Polaris-Scrollable--vertical" data-polaris-scrollable="true" polaris="[object Object]">
                <div class="Polaris-ActionList">
                    <div class="Polaris-ActionList__Section--withoutTitle">
                        <ul class="Polaris-ActionList__Actions">
                             <li><a class="Polaris-ActionList__Item" href="index.php?store=<?php echo $_SESSION['store']; ?>"><div class="Polaris-ActionList__Content">Dashboard</div></a></li>
                            <li><a class="Polaris-ActionList__Item" href="blog_post.php?store=<?php echo $_SESSION['store']; ?>"><div class="Polaris-ActionList__Content">BlogPost</div></a></li>
                            <li><a class="Polaris-ActionList__Item" href="pages.php?store=<?php echo $_SESSION['store']; ?>"><div class="Polaris-ActionList__Content">Pages</div></a></li>
                            <li><a class="Polaris-ActionList__Item" href="products.php?store=<?php echo $_SESSION['store']; ?>"><div class="Polaris-ActionList__Content">Products</div></a></li>
                            <li><a class="Polaris-ActionList__Item" href="collection.php?store=<?php echo $_SESSION['store']; ?>"><div class="Polaris-ActionList__Content">Collection</div></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <div class="Polaris-Page-Header__PrimaryAction forcefullshowonmobile">
          <a href="index.php?destroy=true?store=<?php echo $_GET['store']; ?>"  class="Polaris-Button" style="text-decoration: none;">
            <span class="Polaris-Button__Content">
                <span class="Polaris-Button__Icon">
                    <span class="Polaris-Icon">
                        <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                        <path d="M10 16a1 1 0 1 1 0 2c-4.411 0-8-3.589-8-8s3.589-8 8-8a1 1 0 1 1 0 2c-3.309 0-6 2.691-6 6s2.691 6 6 6zm7.707-6.707a.999.999 0 0 1 0 1.414l-3 3a.997.997 0 0 1-1.414 0 .999.999 0 0 1 0-1.414L14.586 11H10a1 1 0 1 1 0-2h4.586l-1.293-1.293a.999.999 0 1 1 1.414-1.414l3 3z" fill-rule="evenodd" fill="#000"></path>
                        </svg>
                    </span>
                </span>
              <span>logout</span>
            </span>
         </a>
   </div>     
   </div>
  </div>
  </div>
</div>
    </body>
