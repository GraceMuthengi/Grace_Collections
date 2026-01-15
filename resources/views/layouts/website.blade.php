<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('website/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('website/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Nexin HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Marcellus&family=Unbounded:wght@200..900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/font-awesome-all.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/aos.css') }}" />


    <link rel="stylesheet" href="{{ asset('website/css/module-css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/banner.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/explore.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/brand.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/services.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/counter.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/video.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/portfolio.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/process.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/why-choose.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/team.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/testimonial.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/faq.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/module-css/blog.css') }} " />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!--Start Preloader-->
    <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!--End Preloader-->



    <div class="chat-icon"><button type="button" class="chat-toggler"><i class="fa fa-comment"></i></button></div>
    <!--Chat Popup-->
    <div id="chat-popup" class="chat-popup">
        <div class="popup-inner">
            <div class="close-chat"><i class="fa fa-times"></i></div>
            <div class="chat-form">
                <p>Please fill out the form below and we will get back to you as soon as possible.</p>
                <form action="assets/inc/sendemail.php" method="POST" class="contact-form-validated">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Text" required></textarea>
                    </div>
                    <div class="form-group message-btn">
                        <button type="submit" class="thm-btn"> Submit Now
                            <span class="fas fa-arrow-right"></span>
                        </button>
                    </div>
                    <div class="result"></div>
                </form>
            </div>
        </div>
    </div>



    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="index.html"><img src="assets/images/resources/logo-1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown megamenu">
                                    <a href="#">Home </a>
                                    <ul>
                                        <li>
                                            <section class="home-showcase">
                                                <div class="container">
                                                    <div class="home-showcase__inner">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="assets/images/home-showcase/home-showcase-1-1.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                Multi Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                            <a href="index-one-page.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                One Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        01</h3>
                                                                    <!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                            <div class="col-lg-4">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="assets/images/home-showcase/home-showcase-1-2.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index2.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                Multi Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                            <a href="index2-one-page.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                One Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        02
                                                                    </h3><!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                            <div class="col-lg-4">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="assets/images/home-showcase/home-showcase-1-3.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index3.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                Multi Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                            <a href="index3-one-page.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                One Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        03
                                                                    </h3><!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                        </div><!-- /.row -->
                                                    </div><!-- /.home-showcase__inner -->

                                                </div><!-- /.container -->
                                            </section>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="shadow-box">
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-carousel.html">Team Carousel</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                        <li><a href="testimonial.html">Testimonials</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">services</a>
                                    <ul class="shadow-box">
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="services-carousel.html">Services Carousel</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Portfolio</a>
                                    <ul class="shadow-box">
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="portfolio-carousel.html">Portfolio Corousel</a></li>
                                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Blog</a>
                                    <ul class="shadow-box">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__search-box">
                                <a href="#" class="main-menu__search searcher-toggler-box fal fa-search"></a>
                            </div>
                            <div class="main-menu__btn-box">
                                <a href="contact.html" class="thm-btn">Get A Quote
                                    <span class="icon-arrow-up-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        
        

@yield("content")

  <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="footer-widget__title-box">
                            <h2 class="footer-widget__title">Let's Create<br> Something Great</h2>
                            <p class="footer-widget__text">We shift you from today’s reality to tomorrow’s potential,
                                ensuring</p>
                        </div>
                        <div class="footer-widget__btn">
                            <a href="contact.html">Let’s Talk<span class="icon-arrow-up-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__bottom-menu-box">
                                    <ul class="list-unstyled site-footer__bottom-menu">
                                        <li><a href="about.html">About Company</a></li>
                                        <li><a href="about.html">Our Careers</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                    <ul class="list-unstyled site-footer__bottom-menu">
                                        <li><a href="about.html">Privacy Policy</a></li>
                                        <li><a href="about.html">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                                <div class="site-footer__social-and-copyright">
                                    <div class="site-footer__social-box">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-twitter"></span></a>
                                        <a href="#"><span class="icon-instagram"></span></a>
                                        <a href="#"><span class="icon-beeeee"></span></a>
                                    </div>
                                    <p class="site-footer__copyright-text">Copyright © 2025 <a href="#">Nexin</a>. All
                                        Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->

        <script src="{{ asset('website/js/jquery-latest.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('website/js/swiper.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('website/js/odometer.min.js') }}"></script>
    <script src="{{ asset('website/js/wNumb.min.js') }}"></script>
    <script src="{{ asset('website/js/wow.js') }}"></script>
    <script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('website/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('website/js/marquee.min.js') }}"></script>
    <script src="{{ asset('website/js/gsap/gsap.js') }}"></script>
    <script src="{{ asset('website/js/gsap/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('website/js/gsap/SplitText.js') }}"></script>
    <script src="{{ asset('website/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('website/js/jquery.fittext.js') }}"></script>
    <script src="{{ asset('website/js/jquery.lettering.min.js') }}"></script>


            <script src="{{ asset('website/js/script.js') }}"></script>




      


