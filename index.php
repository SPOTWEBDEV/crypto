<?php include('./server/connection.php') ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $sitename ?> || Home</title>
    <meta name="description" content="Gerow - Business Consulting HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/odometer.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/jarallax.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/default.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->



    <!-- header-area-end -->
    <?php include('./includes/header.php') ?>

    <!-- main-area -->
    <main class="fix">v

        <!-- slider-area -->
        <section class="slider-area-two">
            <div class="slider-active-two">
                <div class="single-slider slider-bg-two" data-background="<?php echo $domain ?>assets/img/slider/slider_bg01.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7">
                                <div class="slider-content-two">
                                    <span class="sub-title" data-animation="fadeInUp" data-delay=".2s">Smart & Secure Trading</span>
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Trade Crypto & Forex with Confidence</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Join our platform to experience expert account management, copy trading, and self-trading for maximum profitability.</p>
                                    <a href="<?php echo $domain ?>app/login.php" class="btn btn-three" data-animation="fadeInUp" data-delay=".8s">Get started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-shape-wrap">
                        <img src="<?php echo $domain ?>assets/img/slider/slider_shape01.svg" alt="shape">
                        <img src="<?php echo $domain ?>assets/img/slider/slider_shape02.svg" alt="shape">
                        <img src="<?php echo $domain ?>assets/img/slider/slider_shape03.svg" alt="shape">
                    </div>
                </div>
                <div class="single-slider slider-bg-two" data-background="<?php echo $domain ?>assets/img/slider/slider_bg02.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7">
                                <div class="slider-content-two">
                                    <span class="sub-title" data-animation="fadeInUp" data-delay=".2s">Maximize Your Profits</span>
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Automate & Grow Your Investments</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Leverage cutting-edge AI-driven copy trading and expert strategies to optimize your forex and crypto trading success.</p>
                                    <a href="<?php echo $domain ?>app/login.php" class="btn btn-three" data-animation="fadeInUp" data-delay=".8s">Explore Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-shape-wrap">
                        <img src="<?php echo $domain ?>assets/img/slider/slider_shape01.svg" alt="shape">
                        <img src="<?php echo $domain ?>assets/img/slider/slider_shape02.svg" alt="shape">
                        <img src="<?php echo $domain ?>assets/img/slider/slider_shape03.svg" alt="shape">
                    </div>
                </div>
            </div>
        </section>

        <!-- slider-area-end -->

        <!-- features-area -->
        <section class="features-area-eight">
            <div class="container custom-container-five">
                <div class="features-inner-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="features-item-five">
                                <div class="features-icon-five">
                                    <i class="fas fa-coins"></i>
                                </div>
                                <div class="features-content-five">
                                    <h2 class="title">Crypto Trading</h2>
                                    <p>Trade digital assets with real-time analytics, secure transactions, and expert-backed strategies for maximum gains.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="features-item-five">
                                <div class="features-icon-five">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="features-content-five">
                                    <h2 class="title">Forex Trading</h2>
                                    <p>Access a global forex market with automated trading tools, risk management, and AI-driven insights for profitable trading.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="features-item-five">
                                <div class="features-icon-five">
                                    <i class="fas fa-user-cog"></i>
                                </div>
                                <div class="features-content-five">
                                    <h2 class="title">Account Management</h2>
                                    <p>Let our experts handle your investments with professional account management, ensuring efficiency and high returns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="features-item-five">
                                <div class="features-icon-five">
                                    <i class="fas fa-user-alt"></i>
                                </div>
                                <div class="features-content-five">
                                    <h2 class="title">Copy Trading</h2>
                                    <p>Replicate the success of expert traders with automated copy trading, leveraging real-time market data and proven strategies to enhance your profitability.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="https://widgets.coingecko.com/gecko-coin-price-marquee-widget.js"></script>
<gecko-coin-price-marquee-widget locale="en" outlined="true" coin-ids="" initial-currency="usd"></gecko-coin-price-marquee-widget>




        <!-- features-area-end -->

        <!-- about-area -->
        <section class="about-area-thirteen p-relative section-py-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-img-thirteen">
                            <img src="<?php echo $domain ?>assets/img/images/hu_about_01.jpg" alt="img" data-aos="fade-right" data-aos-delay="400">
                            <img src="<?php echo $domain ?>assets/img/images/hu_about_02.jpg" alt="img" data-aos="fade-left" data-aos-delay="400">
                            <img src="<?php echo $domain ?>assets/img/images/hu_about_shape01.png" alt="img" data-aos="zoom-in" data-aos-delay="800">
                            <div class="experience-wrap-two" data-aos="fade-up" data-aos-delay="800">
                                <h2 class="title">25</h2>
                                <span>Years Of <br> Expertise</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content-thirteen">
                            <div class="section-title-two mb-20 tg-heading-subheading animation-style3">
                                <span class="sub-title">What We Offer</span>
                                <h2 class="title tg-element-title">Pioneering the Future of Crypto Trading</h2>
                            </div>
                            <p>We specialize in providing top-tier crypto solutions, enabling users to optimize their investments with advanced tools and expert strategies.</p>
                            <div class="about-inner-content mb-40">
                                <div class="about-success-wrap">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-wallet"></i>
                                            </div>
                                            <div class="content">
                                                <h2 class="count"><span class="odometer" data-count="63"></span>%</h2>
                                                <p>Secure Wallet Integration</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-thumbs-up"></i>
                                            </div>
                                            <div class="content">
                                                <h2 class="count"><span class="odometer" data-count="95"></span>%</h2>
                                                <p>Client Satisfaction</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="about-list-two">
                                    <ul class="list-wrap">
                                        <li><i class="fas fa-arrow-right"></i>Real-time trading signals</li>
                                        <li><i class="fas fa-arrow-right"></i>High-level security features</li>
                                        <li><i class="fas fa-arrow-right"></i>Comprehensive market risk analysis</li>
                                        <li><i class="fas fa-arrow-right"></i>24/7 support for all traders</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="services.html" class="btn btn-three">Discover Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-shape-wrap-six">
                <img src="<?php echo $domain ?>assets/img/images/request_shape.png" alt="shape" class="animationFramesOne">
                <img src="<?php echo $domain ?>assets/img/images/h6_about_shape.png" alt="shape" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>


        <!-- about-area-end -->



        <!-- services-area -->
        <section class="services-area-eight fix section-py-120">
            <div class="container custom-container-six">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title-two text-center white-title mb-40 tg-heading-subheading animation-style3">
                            <span class="sub-title">Our Expert Services</span>
                            <h2 class="title tg-element-title">Tailored Solutions for Your Crypto Investment Journey</h2>
                        </div>
                    </div>
                </div>
                <div class="row services-active-two">
                    <div class="col-xl-3">
                        <div class="services-item-five shine-animate-item">
                            <div class="services-thumb-five">
                                <a href="services-details.html" class="shine-animate">
                                    <img src="<?php echo $domain ?>assets/img/services/hu_services_img01.jpg" alt="Market Analysis">
                                </a>
                            </div>
                            <div class="services-content-five">
                                <div class="services-content-five-top">
                                    <div class="icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <h2 class="title"><a href="services-details.html">Cryptocurrency Market Trends</a></h2>
                                </div>
                                <p>Stay informed with comprehensive analysis and insights into the ever-evolving crypto market.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services-item-five shine-animate-item">
                            <div class="services-thumb-five">
                                <a href="services-details.html" class="shine-animate">
                                    <img src="<?php echo $domain ?>assets/img/services/hu_services_img02.jpg" alt="Blockchain Growth">
                                </a>
                            </div>
                            <div class="services-content-five">
                                <div class="services-content-five-top">
                                    <div class="icon">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <h2 class="title"><a href="services-details.html">Blockchain Project Promotion</a></h2>
                                </div>
                                <p>Elevate your blockchain projects with customized marketing strategies to ensure greater reach and impact.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services-item-five shine-animate-item">
                            <div class="services-thumb-five">
                                <a href="services-details.html" class="shine-animate">
                                    <img src="<?php echo $domain ?>assets/img/services/hu_services_img03.jpg" alt="Project Execution">
                                </a>
                            </div>
                            <div class="services-content-five">
                                <div class="services-content-five-top">
                                    <div class="icon">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                    <h2 class="title"><a href="services-details.html">Token Launch & Growth</a></h2>
                                </div>
                                <p>Strategize and successfully launch your tokens with expert guidance and a step-by-step approach.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services-item-five shine-animate-item">
                            <div class="services-thumb-five">
                                <a href="services-details.html" class="shine-animate">
                                    <img src="<?php echo $domain ?>assets/img/services/hu_services_img04.jpg" alt="Financial Growth">
                                </a>
                            </div>
                            <div class="services-content-five">
                                <div class="services-content-five-top">
                                    <div class="icon">
                                        <i class="fas fa-piggy-bank"></i>
                                    </div>
                                    <h2 class="title"><a href="services-details.html">Crypto Investment Guidance</a></h2>
                                </div>
                                <p>Get expert advice on how to optimize your crypto portfolio and manage risks effectively.</p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-shape-wrap">
                <img src="<?php echo $domain ?>assets/img/services/h6_services_shape01.png" alt="shape" data-aos="fade-down-left" data-aos-delay="400">
                <img src="<?php echo $domain ?>assets/img/services/h6_services_shape02.png" alt="shape" data-aos="fade-up-right" data-aos-delay="400">
            </div>
        </section>


        <!-- services-area-end -->

        <!-- counter-area -->
        <div class="counter-area-five">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-item-five">
                            <div class="counter-icon-five">
                                <i class="fas fa-project-diagram"></i> <!-- Changed to FontAwesome project icon -->
                            </div>
                            <div class="counter-content-five">
                                <p>Total clients</p>
                                <span class="count odometer" data-count="9525"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-item-five">
                            <div class="counter-icon-five">
                                <i class="fas fa-users"></i> <!-- Changed to FontAwesome users icon -->
                            </div>
                            <div class="counter-content-five">
                                <p>Paid clients</p>
                                <span class="count odometer" data-count="11985"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-item-five">
                            <div class="counter-icon-five">
                                <i class="fas fa-trophy"></i> <!-- Changed to FontAwesome trophy icon -->
                            </div>
                            <div class="counter-content-five">
                                <p>Awards in Crypto Excellence</p>
                                <span class="count odometer" data-count="4722"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-item-five">
                            <div class="counter-icon-five">
                                <i class="fas fa-exchange-alt"></i> <!-- Changed to FontAwesome exchange icon -->
                            </div>
                            <div class="counter-content-five">
                                <p>International Crypto Trades</p>
                                <span class="count odometer" data-count="9522"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
  {
  "width": "100%",
  "height": "550",
  "currencies": [
    "EUR",
    "USD",
    "JPY",
    "GBP",
    "CHF",
    "AUD",
    "CAD",
    "NZD",
    "THB",
    "INR"
  ],
  "isTransparent": false,
  "colorTheme": "light",
  "locale": "en",
  "backgroundColor": "#ffffff"
}
  </script>
</div>
<!-- TradingView Widget END -->

        <!-- counter-area-end -->

        <!-- project-area -->
        <section class="project-area-five project-bg-three" data-background="<?php echo $domain ?>assets/img/bg/h6_project_bg.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-title-two mb-40 tg-heading-subheading animation-style3">
                            <span class="sub-title">Our Latest Crypto Achievements</span>
                            <h2 class="title tg-element-title">Explore Our Most Recent <br> Crypto Projects</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="view-all-btn text-start text-md-end mb-40">
                            <a href="project-details.html" class="btn btn-three">View All Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container custom-container-three">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="project-item-five">
                            <div class="project-thumb-five">
                                <a href="project-details.html"><img src="<?php echo $domain ?>assets/img/project/h6_project_img01.jpg" alt="img"></a>
                            </div>
                            <div class="project-content-five">
                                <h2 class="title"><a href="project-details.html">Crypto Financial Advisory</a></h2>
                                <span>Consulting</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="project-item-five">
                            <div class="project-thumb-five">
                                <a href="project-details.html"><img src="<?php echo $domain ?>assets/img/project/h6_project_img02.jpg" alt="img"></a>
                            </div>
                            <div class="project-content-five">
                                <h2 class="title"><a href="project-details.html">Crypto Brand Design</a></h2>
                                <span>Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="project-item-five">
                            <div class="project-thumb-five">
                                <a href="project-details.html"><img src="<?php echo $domain ?>assets/img/project/h6_project_img03.jpg" alt="img"></a>
                            </div>
                            <div class="project-content-five">
                                <h2 class="title"><a href="project-details.html">Cryptocurrency Investment Guide</a></h2>
                                <span>Investment</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="project-item-five">
                            <div class="project-thumb-five">
                                <a href="project-details.html"><img src="<?php echo $domain ?>assets/img/project/h6_project_img04.jpg" alt="img"></a>
                            </div>
                            <div class="project-content-five">
                                <h2 class="title"><a href="project-details.html">Decentralized Pricing Solutions</a></h2>
                                <span>Blockchain</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- project-area-two -->

        <!-- team-area -->
        <section class="team-area-seven">

            <!-- cta-area -->
            <section class="cta-area-two pt-120">
                <div class="container">
                    <div class="cta-inner-wrap-two" data-background="<?php echo $domain ?>assets/img/bg/cta_bg02.jpg">
                        <div class="row align-items-center">
                            <div class="col-lg-9">
                                <div class="cta-content">
                                    <div class="cta-info-wrap">
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="content">
                                            <span>Get in Touch for More Information</span>
                                            <a href="tel:0123456789">+123 8989 444</a>
                                        </div>
                                    </div>
                                    <h2 class="title">Request a Free Consultation Schedule Today</h2>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="cta-btn text-end">
                                    <a href="contact.html" class="btn btn-three">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- cta-area-end -->

            <div class="team-area-inner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title-two text-center mb-40 tg-heading-subheading animation-style3">
                                <span class="sub-title">Meet Our Experts</span>
                                <h2 class="title tg-element-title">Meet Our Committed Team</h2>
                                <p>Our team of professionals is always here to help you. We work hard to provide the best solutions tailored to your needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="team-item-six">
                                <div class="team-thumb-six">
                                    <img src="<?php echo $domain ?>assets/img/team/h6_team_img01.jpg" alt="img">
                                </div>
                                <div class="team-content-six">
                                    <h2 class="title"><a href="team-details.html">Savannah Nguyen</a></h2>
                                    <span>Lead Consultant</span>
                                    <p>Bringing years of expertise, Savannah provides top-tier business strategies for crypto ventures.</p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="team-item-six">
                                <div class="team-thumb-six">
                                    <img src="<?php echo $domain ?>assets/img/team/h6_team_img02.jpg" alt="img">
                                </div>
                                <div class="team-content-six">
                                    <h2 class="title"><a href="team-details.html">Guy Hawkins</a></h2>
                                    <span>Investment Advisor</span>
                                    <p>Specializing in cryptocurrency investments, Guy offers expert advice to guide your financial decisions.</p>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="team-item-six">
                                <div class="team-thumb-six">
                                    <img src="<?php echo $domain ?>assets/img/team/h6_team_img03.jpg" alt="img">
                                </div>
                                <div class="team-content-six">
                                    <h2 class="title"><a href="team-details.html">Kristin Watson</a></h2>
                                    <span>Marketing Director</span>
                                    <p>Kristin leads our marketing team to bring innovative crypto solutions to the world stage.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="team-item-six">
                                <div class="team-thumb-six">
                                    <img src="<?php echo $domain ?>assets/img/team/h6_team_img04.jpg" alt="img">
                                </div>
                                <div class="team-content-six">
                                    <h2 class="title"><a href="team-details.html">Brooklyn Simmons</a></h2>
                                    <span>Business Strategy Consultant</span>
                                    <p>Brooklyn works closely with clients to develop innovative business strategies tailored for success.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-shape-wrap">
                <img src="<?php echo $domain ?>assets/img/team/h6_team_shape01.png" alt="shape" data-aos="fade-down-right" data-aos-delay="400">
                <img src="<?php echo $domain ?>assets/img/team/h6_team_shape02.png" alt="shape" class="animationFramesOne">
                <img src="<?php echo $domain ?>assets/img/team/h6_team_shape03.png" alt="shape" data-aos="fade-up-left" data-aos-delay="400">
                <img src="<?php echo $domain ?>assets/img/team/h6_team_shape04.png" alt="shape" class="animationFramesOne">
            </div>
        </section>

        <!-- team-area-end -->

        <!-- contact-area -->
        <section class="contact-area-three fix">
            <div class="container-fulid">
                <div class="contact-inner-wrap">
                    <div class="contact-img-two" data-background="https://i.pinimg.com/736x/78/2a/b6/782ab68283a2bcd195b0814b4360abef.jpg"></div>
                    <div class="row g-0 justify-content-end">
                        <div class="col-54">
                            <div class="contact-content-two">
                                <div class="section-title-two white-title mb-10 tg-heading-subheading animation-style3">
                                    <span class="sub-title">Contact With Us</span>
                                    <h2 class="title tg-element-title">Let’s Talk About Crypto Investment</h2>
                                </div>
                                <p>Interested in making crypto investments? Reach out to our experienced consultants for guidance.</p>
                                <div class="contact-form contact-form-two">
                                    <form action="#">
                                        <div class="row gutter-15">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Name *">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="email" placeholder="E-mail *">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="number" placeholder="Phone *">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Subject *">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-grp">
                                                    <textarea placeholder="Comments *"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit">Submit Now</button>
                                    </form>
                                </div>
                                <div class="contact-shape-wrap">
                                    <img src="<?php echo $domain ?>assets/img/images/h6_contact_shape01.png" alt="shape" data-aos="fade-down-left" data-aos-delay="400">
                                    <img src="<?php echo $domain ?>assets/img/images/h6_contact_shape02.png" alt="shape" data-aos="fade-up-right" data-aos-delay="400">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area-seven testimonial-bg-five" data-background="<?php echo $domain ?>assets/img/bg/h6_testimonial_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title-two text-center mb-40 tg-heading-subheading animation-style3">
                            <span class="sub-title">Our Clients' Success Stories</span>
                            <h2 class="title tg-element-title">What Our Clients Say About Crypto Investments</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-item-five">
                            <div class="testimonial-item-five-top">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="testimonial-quote">
                                    <img src="<?php echo $domain ?>assets/img/icons/quote03.svg" alt="">
                                </div>
                            </div>
                            <p>“Thanks to the crypto consultancy team, my investments have seen tremendous growth in a short period. Highly recommended!”</p>
                            <div class="testimonial-avatar">
                               
                                <div class="avatar-info">
                                    <h2 class="title">Mr. John Doe</h2>
                                    <span>Crypto Investor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-item-five">
                            <div class="testimonial-item-five-top">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="testimonial-quote">
                                    <img src="<?php echo $domain ?>assets/img/icons/quote03.svg" alt="">
                                </div>
                            </div>
                            <p>“The personalized advice I received about investing in crypto has been invaluable. My portfolio has never been better!”</p>
                            <div class="testimonial-avatar">
                                
                                <div class="avatar-info">
                                    <h2 class="title">Ms. Jane Smith</h2>
                                    <span>Crypto Enthusiast</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-item-five">
                            <div class="testimonial-item-five-top">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="testimonial-quote">
                                    <img src="<?php echo $domain ?>assets/img/icons/quote03.svg" alt="">
                                </div>
                            </div>
                            <p>“I’ve been able to diversify my investments with the help of their crypto experts. Great service and support.”</p>
                            <div class="testimonial-avatar">
                               
                                <div class="avatar-info">
                                    <h2 class="title">Mr. Robey Alexa</h2>
                                    <span>CEO, Gerow Agency</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-shape-two">
                <img src="<?php echo $domain ?>assets/img/images/h6_testimonial_shape01.png" alt="img">
                <img src="<?php echo $domain ?>assets/img/images/h6_testimonial_shape02.png" alt="img" data-parallax='{"x" : -100 }'>
            </div>
        </section>



        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "100%",
  "height": "550",
  "defaultColumn": "moving_averages",
  "screener_type": "crypto_mkt",
  "displayCurrency": "USD",
  "colorTheme": "light",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog-area-two blog-bg-two" data-background="<?php echo $domain ?>assets/img/bg/h6_blog_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">News & Blogs</span>
                            <h2 class="title tg-element-title">Read Our Latest Updates</h2>
                            <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="blog-post-item-two">
                            <div class="blog-post-thumb-two">
                                <a href="blog-details.html"><img src="<?php echo $domain ?>assets/img/blog/h2_blog_img01.jpg" alt=""></a>
                                <a href="blog.html" class="tag">Development</a>
                            </div>
                            <div class="blog-post-content-two">
                                <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                                <p>Everything you need to start building area atching presence for your business.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="blog-post-item-two">
                            <div class="blog-post-thumb-two">
                                <a href="blog-details.html"><img src="<?php echo $domain ?>assets/img/blog/h2_blog_img02.jpg" alt=""></a>
                                <a href="blog.html" class="tag">Business</a>
                            </div>
                            <div class="blog-post-content-two">
                                <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                                <p>Everything you need to start building area atching presence for your business.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="blog-post-item-two">
                            <div class="blog-post-thumb-two">
                                <a href="blog-details.html"><img src="<?php echo $domain ?>assets/img/blog/h2_blog_img03.jpg" alt=""></a>
                                <a href="blog.html" class="tag">Tax Advisory</a>
                            </div>
                            <div class="blog-post-content-two">
                                <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                                <p>Everything you need to start building area atching presence for your business.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->


        <!-- request-area -->
        <section class="request-area request-bg" data-background="<?php echo $domain ?>assets/img/bg/request_bg.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="request-content tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title">Let’s Request a Schedule For <br> Free Consultation</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="request-content-right">
                            <div class="request-contact">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="content">
                                    <span>Hotline 24/7</span>
                                    <a href="tel:0123456789">+123 8989 444</a>
                                </div>
                            </div>
                            <div class="request-btn request-btn-two">
                                <a href="contact.html" class="btn btn-three">Request a Schedule</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="request-shape">
                <img src="<?php echo $domain ?>assets/img/images/request_shape.png" alt="">
            </div>
        </section>
        <!-- request-area-end -->

    </main>
    <!-- main-area-end -->

    <?php include('./includes/footer.php') ?>
    <!-- footer-area -->

    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="<?php echo $domain ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.odometer.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.appear.js"></script>
    <script src="<?php echo $domain ?>assets/js/gsap.js"></script>
    <script src="<?php echo $domain ?>assets/js/ScrollTrigger.js"></script>
    <script src="<?php echo $domain ?>assets/js/SplitText.js"></script>
    <script src="<?php echo $domain ?>assets/js/gsap-animation.js"></script>
    <script src="<?php echo $domain ?>assets/js/jarallax.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.parallaxScroll.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/particles.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.easypiechart.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.inview.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/swiper-bundle.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/slick.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/ajax-form.js"></script>
    <script src="<?php echo $domain ?>assets/js/aos.js"></script>
    <script src="<?php echo $domain ?>assets/js/wow.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/main.js"></script>
</body>

</html>