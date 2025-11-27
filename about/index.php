<?php include('../server/connection.php') ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $sitename ?> || About-Page</title>
    <meta name="description" content="Gerow - Business Consulting HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/img/newfavicon.jpeg">
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
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css">


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
    <div id="header-fixed-height"></div>

    <?php include('../includes/nav-one.php') ?>
    <!-- header-area-end -->


    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo $domain ?>assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">About us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo $domain ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape-wrap">
                <img src="<?php echo $domain ?>assets/img/images/breadcrumb_shape01.png" alt="">
                <img src="<?php echo $domain ?>assets/img/images/breadcrumb_shape02.png" alt="">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- about-area -->
        <section class="about-area-eight pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="about-img-eight">
                            <img style="width: 100% !important;" src="https://i.pinimg.com/736x/11/66/fd/1166fdcb06c14e40224cff8b8253788a.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content-eight">
                            <div class="section-title-two mb-30">
                                <a href="<?php echo $domain ?>service/"><span class="sub-title">Discover Our Platform</span></a>
                                <h2 class="title">Innovative Crypto Investment Solutions
                                    <small style="color:red; font-size:25px">(YOUR GATEWAY TO DIGITAL WEALTH)</small>
                                </h2>
                            </div>
                            <p>At Fusion Assets, we are committed to revolutionizing cryptocurrency investments by providing innovative, secure, and user-friendly solutions tailored for both beginners and experienced traders. Our mission is to help investors maximize their potential in the fast-evolving digital economy by leveraging cutting-edge technology, real-time insights, and AI-powered trading tools.</p>
                            <p>Our platform offers a seamless trading experience with advanced analytics, automated strategies, and risk management tools, ensuring that users can make informed investment decisions with confidence. We prioritize security, transparency, and efficiency, implementing state-of-the-art encryption and multi-layer security measures to safeguard your assets.</p>

                            <p>At Fusion Assets, we believe in empowering our users with knowledge and the best tools to navigate the crypto market successfully. Whether you're looking to trade actively, invest for the long term, or explore new opportunities in decentralized finance (DeFi), we provide the support and resources to help you achieve your financial goals.</p>

                            <p>Join us today and take advantage of a smarter, more secure way to invest in cryptocurrency!</p>
                            <div class="about-content-inner">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Automated Trading</h4>
                                            <p>Utilize AI-driven algorithms to execute trades efficiently and maximize your returns in real time.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-wallet"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Secure Crypto Wallet</h4>
                                            <p>Store and manage your digital assets with our multi-layer security wallet, ensuring safe and fast transactions.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-content-bottom">
                                <div class="services-btn">
                                    <a href="<?php echo $domain ?>service/" class="btn">Start Investing</a>
                                </div>
                                <div class="about-author-info">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- about-area-end -->

        <!-- choose-area -->
        <section class="choose-area-three" id="mission">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="choose-content-three">
                            <div class="section-title-two white-title mb-30">
                                <span class="sub-title">OUR MISSION</span>
                                <h2 class="title">EMPOWERING YOUR CRYPTO JOURNEY</h2>
                            </div>
                            <p>At <?php echo $sitename ?>, our mission is to revolutionize the crypto space by providing secure, transparent, and innovative solutions that empower investors and traders to navigate the digital asset world with confidence.</p>
                            <p>We strive to bridge the gap between traditional finance and decentralized markets, offering seamless access to trading, staking, and investment opportunities powered by cutting-edge technology.</p>
                            <p>Our commitment is to simplify cryptocurrency adoption, ensuring financial growth and freedom for users worldwide.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-img-three">
                            <img src="https://i.pinimg.com/736x/8f/8c/2f/8f8c2fa88523d7a02c0ac25a1b1bfbb1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- choose-area-end -->


        <!-- team-area -->
        <section class="team-area team-bg" data-background="<?php echo $domain ?>assets/img/bg/team_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-8">
                        <div class="section-title text-center mb-50">
                            <a href="#mission"><span class="sub-title">OUR VALUES</span></a>
                            <h2 class="title">CULTURE AND CORE VALUES</h2>
                            <p>At Fusion Assets, our foundation is built on strong values that drive our commitment to revolutionizing the cryptocurrency investment landscape. We believe that success in the digital economy is rooted in innovation, transparency, and security, ensuring that every investor, from beginners to experts, experiences seamless and rewarding financial growth.<p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul>
                            <li><strong>Decentralization & Financial Inclusion:</strong> We believe in the power of blockchain technology to create a decentralized, borderless, and inclusive financial ecosystem. Our goal is to empower users worldwide, eliminating barriers to financial growth and ensuring accessibility for all.</li>
                            <li><strong>Security First:</strong> Protecting your digital assets is our top priority. We implement state-of-the-art encryption, multi-layer authentication, and advanced security protocols to safeguard your investments from potential threats, providing you with peace of mind.<li>
                            <li><strong>Transparency:</strong> We operate with complete transparency, ensuring that all transactions, operations, and investment processes remain open, auditable, and accessible to our users. Our commitment to trust fosters strong, long-term relationships with our growing community.<li>
                            <li><strong>Financial Freedom:</strong> At Fusion Assets, we provide a diverse range of financial tools and services—including crypto trading, staking, passive income solutions, and DeFi opportunities—to help users take control of their financial future and maximize their earning potential.</li>
                            <li><strong>Innovation:</strong> The crypto space is constantly evolving, and so are we. Our team is dedicated to staying ahead by integrating the latest blockchain advancements, AI-driven trading tools, and real-time market insights to optimize user experience and profitability.<li>
                            <li><strong>Community-Centric:</strong> We value our users and prioritize active engagement with the crypto community. Through educational resources, customer support, and interactive discussions, we ensure that every investor has the knowledge and confidence to succeed.</li>
                            <li><strong>Growth-Oriented:</strong> Our mission is to provide long-term, sustainable investment solutions that maximize returns while minimizing risks. We carefully design our strategies to align with market trends, ensuring consistent growth for our users in the dynamic digital economy.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- team-area-end -->

        <!-- testimonial-area -->
        <!-- <section class="testimonial-area-three testimonial-area-six pt-120">
            <div class="container">
                <div class="row g-0 align-items-end">
                    <div class="col-37">
                        <div class="testimonial-img-three">
                            <img src="<?php echo $domain ?>assets/img/images/h3_testimonial_img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-63">
                        <div class="testimonial-item-wrap-three" data-background="<?php echo $domain ?>assets/img/bg/h3_testimonial_bg.png">
                            <div class="testimonial-active-three">
                                <div class="testimonial-item-three">
                                    <div class="testimonial-content-three">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing elita Moremsit amet.</p>
                                        <div class="testimonial-info">
                                            <h2 class="title">Mr.Robey Alexa</h2>
                                            <span>CEO, <?php echo $sitename ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item-three">
                                    <div class="testimonial-content-three">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing.</p>
                                        <div class="testimonial-info">
                                            <h2 class="title">Guy Hawkins</h2>
                                            <span>CEO, Gerow Agency</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-nav-three"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- testimonial-area-end -->

        <!-- brand-area -->

        <!-- brand-area-end -->


    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <?php include('../includes/footer.php') ?>
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