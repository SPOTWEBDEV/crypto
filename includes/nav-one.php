<header class="header-style-six">
         <div class="heder-top-wrap">
                  <div class="container">
                           <div class="row align-items-center">
                                    <div class="col-lg-7">
                                             <div class="header-top-left">
                                                      <ul class="list-wrap">
                                                               <li><i class="fas fa-map-marker-alt"></i><?php echo $siteaddress ?>
                                                               </li> <!-- Changed to Font Awesome -->
                                                               <li><i class="fas fa-envelope"></i><a
                                                                                 href="mailto:<?php echo $siteemail ?>"><?php echo $siteemail ?></a>
                                                               </li> <!-- Changed to Font Awesome -->
                                                      </ul>
                                             </div>
                                    </div>
                                    <div class="col-lg-5">
                                             <div class="header-top-right">
                                                      <div class="header-contact">
                                                               <a href="tel:0123456789"><i
                                                                                 class="fas fa-phone-alt"></i><?php echo $sitephone ?></a>
                                                               <!-- Changed to Font Awesome -->
                                                      </div>
                                                      <div class="header-social">
                                                               <ul class="list-wrap">
                                                                        <li><a href="#"><i
                                                                                                   class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                                   class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                                   class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                                   class="fab fa-pinterest-p"></i></a>
                                                                        </li>
                                                               </ul>
                                                      </div>
                                             </div>
                                    </div>
                           </div>
                  </div>
         </div>
         <div id="sticky-header" class="menu-area">
                  <div class="container">
                           <div class="row">
                                    <div class="col-12">
                                             <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                             <!-- Changed to Font Awesome -->
                                             <div class="menu-wrap">
                                                      <nav class="menu-nav">

                                                               <img style="height:80px !important; width:200px;"
                                                                        src="../assets/img/logo/logo.png" alt="Logo">


                                                               <div class="navbar-wrap main-menu d-none d-lg-flex">
                                                                        <ul class="navigation">
                                                                                 <li><a href="<?php echo $domain ?>">Home</a>
                                                                                 </li>
                                                                                 <li><a href="<?php echo $domain ?>about/">About</a>
                                                                                
                                                                                 <li><a href="<?php echo $domain ?>contact/">contacts</a>
                                                                                 </li>

                                                                                 <li class="d-flex d-lg-none"><a href="<?php echo $domain ?>app/login.php">Login</a>
                                                                                 </li>
                                                                        </ul>
                                                               </div>
                                                               <div class="header-action d-none d-md-block">
                                                                        <ul class="list-wrap">
                                                                                 <!-- <li class="header-search"><a href="#"><i class="fas fa-search"></i></a></li> Changed to Font Awesome -->
                                                                                 <li class="header-btn"><a
                                                                                                   href="<?php echo $domain ?>app/login.php"
                                                                                                   class="btn btn-two">Login</a></li>
                                                                        </ul>
                                                               </div>
                                                      </nav>
                                             </div>

                                             <!-- Mobile Menu  -->
                                             <div class="mobile-menu">
                                                      <nav class="menu-box">
                                                               <div class="close-btn"><i class="fas fa-times"></i></div>
                                                               <!-- Changed to Font Awesome -->
                                                               <div class="nav-logo">
                                                                        <img style="height:100px !important; max:width"
                                                                                 src="<?php echo $domain ?>logo.jpg"
                                                                                 alt="Logo">

                                                               </div>
                                                               <div class="mobile-search">
                                                                        <form action="#">
                                                                                 <!-- <input type="text" placeholder="Search here..."> -->
                                                                                 <!-- <button><i class="fas fa-search"></i></button> Changed to Font Awesome -->
                                                                        </form>
                                                               </div>
                                                               <div class="menu-outer">
                                                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                                               </div>
                                                               <div class="social-links">
                                                                        <ul class="clearfix list-wrap">
                                                                                 <li><a href="#"><i
                                                                                                            class="fab fa-facebook-f"></i></a>
                                                                                 </li>
                                                                                 <li><a href="#"><i
                                                                                                            class="fab fa-twitter"></i></a>
                                                                                 </li>
                                                                                 <li><a href="#"><i
                                                                                                            class="fab fa-instagram"></i></a>
                                                                                 </li>
                                                                                 <li><a href="#"><i
                                                                                                            class="fab fa-linkedin-in"></i></a>
                                                                                 </li>
                                                                                 <li><a href="#"><i
                                                                                                            class="fab fa-youtube"></i></a>
                                                                                 </li>
                                                                        </ul>
                                                               </div>
                                                               
                                                      </nav>
                                             </div>
                                             <div class="menu-backdrop"></div>
                                             <!-- End Mobile Menu -->

                                    </div>
                           </div>
                  </div>
         </div>

         <!-- header-search -->
         <!-- <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="search-close">
            <span><i class="fas fa-times"></i></span> <!-- Changed to Font Awesome -->
         </div>
         <div class="search-wrap text-center">
                  <div class="container">
                           <div class="row">
                                    <div class="col-12">
                                             <h2 class="title">... Search Here ...</h2>
                                             <div class="search-form">
                                                      <form action="#">
                                                               <input type="text" name="search"
                                                                        placeholder="Type keywords here">
                                                               <button class="search-btn"><i
                                                                                 class="fas fa-search"></i></button>
                                                               <!-- Changed to Font Awesome -->
                                                      </form>
                                             </div>
                                    </div>
                           </div>
                  </div>
         </div>
         </div>
         <!-- header-search-end -->

</header>