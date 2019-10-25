
<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

    <head>

        <title>Mr Car Clean- Authentication</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />

        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900&amp;subset=latin,latin-ext">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Serif:700italic,700,400italic&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic">

        <link rel="stylesheet" type="text/css" href="../../assets/style/jquery.qtip.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/jquery-ui.min.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/superfish.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/flexnav.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/DateTimePicker.min.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/fancybox/helpers/jquery.fancybox-buttons.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/revolution/layers.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/revolution/settings.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/revolution/navigation.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/base.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/style/responsive.css"/>

        <script type="text/javascript" src="../../assets/script/jquery.min.js"></script>
        <style>
            .loginbutton-topnav {
                line-height: 0;
                background-color: orange;
                margin-top: -2px;
            }
        </style>

    </head>

    <body class="template-page-about-style-1">

        <!-- Header -->
        <div class="template-header template-header-background template-header-background-2">

            <!-- Top header -->
            <div class="template-header-top">

                <!-- Logo -->
                <div class="template-header-top-logo">
                    <a href="/" title="">
                        <img src="../../assets/media/image/logo.png" alt="" class="template-logo"/>
                        <img src="../../assets/media/image/logo_sticky.png" alt="" class="template-logo template-logo-sticky"/>
                    </a>
                </div>

                <!-- Menu-->
                <div class="template-header-top-menu template-main">
                    <nav>

                        <!-- Default menu-->
                        <div class="template-component-menu-default">
                            <ul class="sf-menu">
                                <!--<li><a href="/" class="template-state-selected">Home</a></li>-->
                                <li><a href="/" class="template-state-selected">Home</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="{{ route('login') }}"><input type="button" value="Login" class="template-component-button loginbutton-topnav"/></a></li>
                                <li><a href="{{ route('register') }}"><input type="button" value="Register" class="template-component-button loginbutton-topnav"/></a></li>
                            </ul>
                        </div>

                    </nav>
                    <nav>

                        <!-- Mobile menu-->
                        <div class="template-component-menu-responsive">
                            <ul class="flexnav">
                                <li><a href="#"><span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;</a></li>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Login</a></li>
                            </ul>
                        </div>

                    </nav>
                    <script type="text/javascript">
                        jQuery(document).ready(function ($)
                        {
                            $('.template-header-top').templateHeader();
                        });
                    </script>
                </div>

                <!-- Social icons -->
                <div class="template-header-top-icon-list template-component-social-icon-list-1">
                    <ul class="template-component-social-icon-list">
                        <li><a href="https://twitter.com/quanticalabs" class="template-icon-social-twitter" target="_blank"></a></li>
                        <li><a href="https://www.facebook.com/QuanticaLabs" class="template-icon-social-facebook" target="_blank"></a></li>
                        <li><a href="https://dribbble.com/quanticalabs" class="template-icon-social-dribbble" target="_blank"></a></li>
                        <li><a href="book-your-wash.html" class="template-icon-meta-cart"></a></li>
                        <li><a href="#" class="template-icon-meta-search"></a></li>
                        <li><a href="#" class="template-icon-meta-menu"></a></li>
                    </ul>
                </div>

            </div>

            <div class="template-header-bottom">

                <div class="template-main">

                    <div class="template-header-bottom-page-title">
                        <h1>Login</h1>
                    </div>

                    <div class="template-header-bottom-page-breadcrumb">
                        <a href="index.html">Home</a><span class="template-icon-meta-arrow-right-12"></span><a href="#">Login</a>
                    </div>

                </div>

            </div>

        </div>
@yield('content')
<!-- Footer -->
        <div class="template-footer">

            <div class="template-main">

                <!-- Footer top -->
                <div class="template-footer-top">

                    <!-- Layout 25x25x25x25 -->
                    <div class="template-layout-25x25x25x25 template-clear-fix">

                        <!-- Left column -->
                        <div class="template-layout-column-left">
                            <h6>About</h6>
                            <p>Autospan Hand Wash is an eco-friendly hand car wash and detailing service based in Portland.</p>
                            <img src="../../assets/media/image/logo.png" alt="" class="template-logo" />
                        </div>

                        <!-- Center left column -->
                        <div class="template-layout-column-center-left">
                            <h6>Services</h6>
                            <ul class="template-list-reset">
                                <li><a href="service-style-1.html">Exterior Hand Wash</a></li>
                                <li><a href="service-style-1.html">Tower Hand Dry</a></li>
                                <li><a href="service-style-1.html">Tire Dressing</a></li>
                                <li><a href="service-style-1.html">Wheel Shine</a></li>
                                <li><a href="service-style-1.html">Interior Vacuum</a></li>
                                <li><a href="service-style-1.html">Sealer Hand Wax</a></li>
                            </ul>
                        </div>

                        <!-- Center right column -->
                        <div class="template-layout-column-center-right">
                            <h6>Company</h6>
                            <ul class="template-list-reset">
                                <li><a href="about-style-1.html">About Us</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="service-style-2.html">Our Services</a></li>
                                <li><a href="book-your-wash.html">Book Your Wash</a></li>
                                <li><a href="gallery.html">Portfolio</a></li>
                                <li><a href="contact-style-1.html">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Right column -->
                        <div class="template-layout-column-right">
                            <h6>Newsletter</h6>
                            <form class="template-component-newsletter-form">
                                <div class="template-component-form-field">
                                    <label for="newsletter-form-email">Your e-mail address *</label>
                                    <input type="text" name="newsletter-form-email" id="newsletter-form-email"/>
                                </div>
                                <div class="template-margin-top-2">
                                    <input type="submit" value="Subscribe" class="template-component-button" name="newsletter-form-submit" id="newsletter-form-submit"/>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

                <!-- Footer bottom -->
                <div class="template-footer-bottom">

                    <!-- Social icon list -->
                    <ul class="template-component-social-icon-list template-component-social-icon-list-2">
                        <li><a href="https://twitter.com/quanticalabs" class="template-icon-social-twitter" target="_blank"></a></li>
                        <li><a href="https://www.facebook.com/QuanticaLabs" class="template-icon-social-facebook" target="_blank"></a></li>
                        <li><a href="https://dribbble.com/quanticalabs" class="template-icon-social-dribbble" target="_blank"></a></li>
                        <li><a href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=quanticalabs" class="template-icon-social-envato" target="_blank"></a></li>
                        <li><a href="https://www.behance.net/quanticalabs" class="template-icon-social-behance" target="_blank"></a></li>
                        <li><a href="https://www.youtube.com/user/quanticalabs" class="template-icon-social-youtube" target="_blank"></a></li>
                    </ul>

                    <!-- Copyright -->
                    <div class="template-footer-bottom-copyright">
                        GoClean &copy; 2019 
                    </div>

                </div>

            </div>

        </div>

        <!-- Search box -->
        <div class="template-component-search-form">
            <div></div>
            <form>
                <div>
                    <input type="search" name="search"/>
                    <span class="template-icon-meta-search"></span>
                    <input type="submit" name="submit" value=""/>
                </div>
            </form>
        </div>

        <!-- Go to top button -->
        <a href="#go-to-top" class="template-component-go-to-top template-icon-meta-arrow-large-tb"></a>

        <!-- Wrapper for date picker -->
        <div id="dtBox"></div>

        <!-- JS files -->
        <script type="text/javascript" src="../../assets/script/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../../assets/script/superfish.min.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.easing.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.blockUI.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.qtip.min.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.fancybox.js"></script>
        <script type="text/javascript" src="../../assets/script/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.actual.min.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.flexnav.min.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="../../assets/script/sticky.min.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.fancybox-media.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.fancybox-buttons.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.carouFredSel.packed.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.responsiveElement.js"></script>
        <script type="text/javascript" src="../../assets/script/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="../../assets/script/DateTimePicker.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>

        <!-- Revolution Slider files -->
        <script type="text/javascript" src="../../assets/script/revolution/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="../../assets/script/revolution/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="../../assets/script/revolution/extensions/revolution.extension.video.min.js"></script>

        <!-- Plugins files -->
        <script type="text/javascript" src="../../assets/plugin/booking/jquery.booking.js"></script>

        <!-- Components files -->
        <script type="text/javascript" src="../../assets/script/template/jquery.template.tab.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.image.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.helper.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.header.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.counter.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.gallery.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.goToTop.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.fancybox.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.moreLess.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.googleMap.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.accordion.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.searchForm.js"></script>
        <script type="text/javascript" src="../../assets/script/template/jquery.template.testimonial.js"></script>
        <script type="text/javascript" src="../../assets/script/public.js"></script>

    </body>

</html>