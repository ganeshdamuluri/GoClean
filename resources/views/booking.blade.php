
<!DOCTYPE html>

<html>

    <head>

        <title>Booking a car Clean- mr Car Clean</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />

        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

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
            .ui-datepicker .ui-datepicker-header {
                background-color:#cccccc;
            }
            .ui-datepicker table {
                background-color:#cccccc;
            }
            .styled-select {
                background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
                height: 29px;
                overflow: hidden;
                width: 240px;
            }

            .styled-select select {
                background: transparent;
                border: none;
                font-size: 14px;
                height: 29px;
                padding: 5px; /* If you add too much padding here, the options won't show in IE */
                width: 268px;
            }

            .styled-select.slate {
                background: url(http://i62.tinypic.com/2e3ybe1.jpg) no-repeat right center;
                height: 34px;
                width: 240px;
            }

            .styled-select.slate select {
                border: 1px solid #ccc;
                font-size: 16px;
                height: 34px;
                width: 268px;
            }

            /* -------------------- Rounded Corners */
            .rounded {
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
            }

            .semi-square {
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
            }

            /* -------------------- Colors: Background */
            .slate   { background-color: #ddd; }
            .green   { background-color: #779126; }
            .blue    { background-color: #3b8ec2; }
            .yellow  { background-color: #eec111; }
            .black   { background-color: #000; }

            /* -------------------- Colors: Text */
            .slate select   { color: #000; }
            .green select   { color: #fff; }
            .blue select    { color: #fff; }
            .yellow select  { color: #000; }
            .black select   { color: #fff; }


            /* -------------------- Select Box Styles: danielneumann.com Method */
            /* -------------------- Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/ */
            #mainselection select {
                border: 0;
                color: #EEE;
                background: transparent;
                font-size: 20px;
                font-weight: bold;
                padding: 2px 10px;
                width: 378px;
                *width: 350px;
                *background: #58B14C;
                -webkit-appearance: none;
            }

            #mainselection {
                overflow:hidden;
                width:350px;
                -moz-border-radius: 9px 9px 9px 9px;
                -webkit-border-radius: 9px 9px 9px 9px;
                border-radius: 9px 9px 9px 9px;
                box-shadow: 1px 1px 11px #330033;
                background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
            }


            /* -------------------- Select Box Styles: stackoverflow.com Method */
            /* -------------------- Source: http://stackoverflow.com/a/5809186 */
            select#soflow, select#soflow-color {
                -webkit-appearance: button;
                -webkit-border-radius: 2px;
                -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
                -webkit-padding-end: 20px;
                -webkit-padding-start: 2px;
                -webkit-user-select: none;
                background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
                background-position: 97% center;
                background-repeat: no-repeat;
                border: 1px solid #AAA;
                color: #555;
                font-size: inherit;
                margin: 20px;
                overflow: hidden;
                padding: 5px 10px;
                text-overflow: ellipsis;
                white-space: nowrap;
                width: 300px;
            }

            select#soflow-color {
                color: #fff;
                background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
                background-color: #779126;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                padding-left: 15px;
            }

            .checkbox-custom, .radio-custom {
                opacity: 0;
                position: absolute;   
            }

            .checkbox-custom, .checkbox-custom-label, .radio-custom, .radio-custom-label {
                display: inline-block;
                vertical-align: middle;
                margin: 5px;
                cursor: pointer;
            }

            .checkbox-custom-label, .radio-custom-label {
                position: relative;
            }

            .checkbox-custom + .checkbox-custom-label:before, .radio-custom + .radio-custom-label:before {
                content: '';
                background: #fff;
                border: 2px solid #ddd;
                display: inline-block;
                vertical-align: middle;
                width: 20px;
                height: 20px;
                padding: 2px;
                margin-right: 10px;
                text-align: center;
            }

            .checkbox-custom:checked + .checkbox-custom-label:before {
                background: #cccccc;
            }

            .radio-custom + .radio-custom-label:before {
                border-radius: 50%;
            }

            .radio-custom:checked + .radio-custom-label:before {
                background: #ccc;
            }


            .checkbox-custom:focus + .checkbox-custom-label, .radio-custom:focus + .radio-custom-label {
                outline: 1px solid #ddd; /* focus style */
            }
        </style>
        <script>
            $(function () {
                $("#datepicker").datepicker();
            });
    </script>
    </head>

    <body class="template-page-book-your-wash">

        <!-- Header -->
        <div class="template-header template-header-background template-header-background-1">

            <!-- Top header -->
            <div class="template-header-top">

                <!-- Logo -->
                <div class="template-header-top-logo">
                    <a href="index.html" title="">
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
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/booking" class="template-state-selected">Booking</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>

                    </nav>
                    <nav>

                        <!-- Mobile menu-->
                        <div class="template-component-menu-responsive">
                            <ul class="flexnav">
                                <li><a href="#"><span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;</a></li>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#.html">About Us</a></li>
                                <li><a href="book-your-wash.html" class="template-state-selected">Booking</a></li>
                                <li><a href="#.html">Services</a></li>
                                <li><a href="#.html">Contact</a></li>
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
                        <h1>Book your wash</h1>
                    </div>

                    <div class="template-header-bottom-page-breadcrumb">
                        <a href="index.html">Home</a><span class="template-icon-meta-arrow-right-12"></span><a href="#">Book your wash</a>
                    </div>

                </div>

            </div>

        </div>

        <!-- Content -->
        <div class="template-content">

            <!-- Section -->
            <div class="template-component-booking template-section template-main" id="template-booking">

                <!-- Booking form -->
                <form  method="POST" id="form2">
                    {{ csrf_field() }}

                    <ul>

                        <!-- Vehcile list -->

                        <li>

                            <!-- Step -->
                            <div class="template-component-booking-item-header template-clear-fix">
                                <span>
                                    <span>1</span>
                                    <span>/</span>
                                    <span>4</span>
                                </span>
                                <h3>Vehicle type</h3>
                                <h5>Select vehicle type below.</h5>
                            </div>

                            <!-- Content -->
                            <div class="template-component-booking-item-content">

                                <!-- Vehicle list -->
                                <div class="styled-select slate" style="margin-left:10%;">
                                    <select name="cartype">
                                        <option value="Regular Size Car">Regular Size Car</option>
                                        <option value="Medium Size Car">Medium Size Car</option>
                                        <option value="Compact SUV">Compact SUV</option>
                                        <option value="Minivan">Minivan</option>
                                    </select>
                                </div>

                            </div>

                        </li>
                        <!-- Package list -->


                        <li>

                            <!-- Step -->
                            <div class="template-component-booking-item-header template-clear-fix">
                                <span>
                                    <span>2</span>
                                    <span>/</span>
                                    <span>4</span>
                                </span>
                                <h3>Wash packages</h3>
                                <h5>Which wash is best for your vehicle?</h5>
                            </div>

                            <!-- Content -->
                            <div class="template-component-booking-item-content">

                                <!-- Package list -->
                                <div>
                                    <input id="radio-1" class="radio-custom" name="radio-group" type="radio" value="package1" checked>
                                    <label for="radio-1" class="radio-custom-label">BASIC HAND WASH 
                                        <br/> <span style="color:#103268;">Services:  Exterior Hand Wash | Towel Hand Dry | Wheel Shine</span>
                                        <br/> <span style="color:#1c8c61;">Duration:  25min</span></label>

                                </div>
                                <div>
                                    <input id="radio-2" class="radio-custom" name="radio-group" type="radio" value="package2">
                                    <label for="radio-2" class="radio-custom-label">DELUXE WASH 
                                        <br/> <span style="color:#103268;">Services:  Exterior Hand Wash | Towel Hand Dry | Wheel Shine | Tire Dressing | Windows In & Out | Sealer Hand Wax</span>
                                        <br/> <span style="color:#1c8c61;">Duration:  40min</span></label>
                                </div>
                                <div>
                                    <input id="radio-3" class="radio-custom" name="radio-group" type="radio" value="package3">
                                    <label for="radio-3" class="radio-custom-label">ULTIMATE SHINE 
                                        <br/> <span style="color:#103268;">Services:  Exterior Hand Wash | Towel Hand Dry | Wheel Shine | Tire Dressing | Windows In & Out | Sealer Hand Wax | Interior Vacuum | Trunk Vacuum | Door Shuts & Plastics | Dashboard Clean</span>
                                        <br/> <span style="color:#1c8c61;">Duration:  60min</span></label>
                                </div>
                                <div>
                                    <input id="radio-4" class="radio-custom" name="radio-group" type="radio" value="package4">
                                    <label for="radio-4" class="radio-custom-label">PLATINUM WORKS 
                                        <br/> <span style="color:#103268;">Services:  Exterior Hand Wash | Towel Hand Dry | Wheel Shine | Tire Dressing | Windows In & Out | Sealer Hand Wax | Interior Vacuum | Trunk Vacuum | Door Shuts & Plastics | Dashboard Clean | Air Freshener | Triple Coat Hand Wax | Exterior Vinyl Protectant</span>
                                        <br/> <span style="color:#1c8c61;">Duration:  100min</span></label>
                                </div>

                            </div>

                        </li>
                        <!-- Service list -->


                        <li>

                            <!-- Step -->
                            <div class="template-component-booking-item-header template-clear-fix">
                                <span>
                                    <span>3</span>
                                    <span>/</span>
                                    <span>4</span>
                                </span>
                                <h3>Services menu</h3>
                                <h5>A la carte services menu.</h5>
                            </div>

                            <!-- Content -->
                            <div class="template-component-booking-item-content">

                                <!-- Service list -->
                                <div>
                                    <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox" value="Tire Dressing">
                                    <label for="checkbox-1" class="checkbox-custom-label">Tire Dressing 
                                        <span style="color:#1c8c61;"> | Duration:  5min</span></label>
                                </div>
                                <div>
                                    <input id="checkbox-2" class="checkbox-custom" name="checkbox-2" type="checkbox" value="Windows In & Out">
                                    <label for="checkbox-2" class="checkbox-custom-label">Windows In & Out <span style="color:#1c8c61;"> | Duration:  5min</span>
                                        <br/> <span style="color:#103268;">Description: We clean the inside of your windscreen and other interior windows. We give special attention to the rear view mirror and any vanity mirrors. If you have got a glass sunroof that will be cleaned too.</span></label>
                                </div>
                                <div>
                                    <input id="checkbox-3" class="checkbox-custom" name="checkbox-3" type="checkbox" value="Sealer Hand Wax">
                                    <label for="checkbox-3" class="checkbox-custom-label">Sealer Hand Wax 
                                        <span style="color:#1c8c61;"> | Duration:  5min</span></label>   
                                </div>
                                <div>
                                    <input id="checkbox-4" class="checkbox-custom" name="checkbox-4" type="checkbox" value="Interior Vacuum">
                                    <label for="checkbox-4" class="checkbox-custom-label">Interior Vacuum 
                                        <span style="color:#1c8c61;"> | Duration:  10min</span></label>  
                                       <br/> <span style="color:#103268;">Description: We vacuum your seats, including all the creases in your fabric or leather, carpets and mats. We will not miss under your seats.</span></label>
                                </div>
                                <div>
                                    <input id="checkbox-5" class="checkbox-custom" name="checkbox-5" type="checkbox" value="Trunk Vacuum">
                                    <label for="checkbox-5" class="checkbox-custom-label">Trunk Vacuum 
                                        <span style="color:#1c8c61;"> | Duration:  5min</span></label> 
                                        </div>
                                <div>
                                    <input id="checkbox-6" class="checkbox-custom" name="checkbox-6" type="checkbox" value="Door Shuts & Plastics">
                                    <label for="checkbox-6" class="checkbox-custom-label">Door Shuts & Plastics 
                                        <span style="color:#1c8c61;"> | Duration:  5min</span></label>   
                                </div>
                                <div>
                                    <input id="checkbox-7" class="checkbox-custom" name="checkbox-7" type="checkbox" type="checkbox" value="Sealer Hand Wax">
                                    <label for="checkbox-7" class="checkbox-custom-label">Sealer Hand Wax 
                                        <span style="color:#1c8c61;"> | Duration:  5min</span></label>   
                                </div>
                                <div>
                                    <input id="checkbox-8" class="checkbox-custom" name="checkbox-8" type="checkbox" value="Dashboard Clean">
                                    <label for="checkbox-8" class="checkbox-custom-label">Dashboard Clean 
                                        <span style="color:#1c8c61;"> | Duration:  5min</span></label>   
                                </div>
                                <div>
                                    <input id="checkbox-9" class="checkbox-custom" name="checkbox-9" type="checkbox" value="Air Freshener">
                                    <label for="checkbox-9" class="checkbox-custom-label">Air Freshener 
                                        <span style="color:#1c8c61;"> | Duration:  2min</span></label>   
                                </div>
                                <div>
                                    <input id="checkbox-10" class="checkbox-custom" name="checkbox-10" type="checkbox" value="Triple Coat Hand Wax">
                                    <label for="checkbox-0" class="checkbox-custom-label">Triple Coat Hand Wax 
                                        <span style="color:#1c8c61;"> | Duration:  30min</span></label>   
                                </div>
                                <div>
                                    <input id="checkbox-11" class="checkbox-custom" name="checkbox-11" type="checkbox" value="Exterior Vinyl Protectant">
                                    <label for="checkbox-11" class="checkbox-custom-label">Exterior Vinyl Protectant 
                                        <span style="color:#1c8c61;"> | Duration:  5min</span></label>   
                                </div>
                                <div>
                                    <input id="checkbox-12" class="checkbox-custom" name="checkbox-12" type="checkbox" value="Rain-X Complete">
                                    <label for="checkbox-12" class="checkbox-custom-label">Rain-X Complete 
                                        <span style="color:#1c8c61;"> | Duration:  5min</span></label> 
                                        <br/> <span style="color:#103268;">Description: Rain-X Complete is a surface protectant designed to add premium shine, protection and water repellency to glass, paint, trim and chrome. After 24 hours Rain-X Complete actually cures onto the surfaces of your vehicle for better adhesion and enhanced protection.</span></label>
                                </div>
                                <div>
                                    <input id="checkbox-13" class="checkbox-custom" name="checkbox-13" type="checkbox" value="Engine Steam Clean">
                                    <label for="checkbox-13" class="checkbox-custom-label">Engine Steam Clean 
                                        <span style="color:#1c8c61;"> | Duration:  30min</span></label>   
                                </div>
                                <div>
                                    <input id="checkbox-14" class="checkbox-custom" name="checkbox-14" type="checkbox" value="Paint Protection">
                                    <label for="checkbox-14" class="checkbox-custom-label">Paint Protection 
                                        <span style="color:#1c8c61;"> | Duration:  180min</span></label>
                                        <br/> <span style="color:#103268;">Description: Paint Protection helps preserve a car's original manufacturers paint. Using our high quality paint protectant can give your exterior the added strength, preserving it that glow and shine over many years to come.</span></label>
                                </div> 
                            </div>

                        </li>
                        <!-- Summary -->


                        <li>

                            <!-- Step -->
                            <div class="template-component-booking-item-header template-clear-fix">
                                <span>
                                    <span>4</span>
                                    <span>/</span>
                                    <span>4</span>
                                </span>
                                <h3>Booking summary</h3>
                                <h5>Please provide us with your contact information.</h5>
                            </div>


                            <!-- Content -->
                            <div class="template-component-booking-item-content">

                                <ul class="template-component-booking-summary template-clear-fix">

                                    <!-- Duration -->
                                    <li class="template-component-booking-summary-duration">
                                        <div class="template-icon-booking-meta-total-duration"></div>
                                        <h5>
                                            <span>0</span>
                                            <span>h</span>
                                            &nbsp;
                                            <span>0</span>
                                            <span>min</span>
                                        </h5>
                                        <span>Duration</span>
                                    </li>

                                    <!-- Price -->
                                    <li class="template-component-booking-summary-price ">
                                        <div class="template-icon-booking-meta-total-price"></div>
                                        <h5>
                                            <span class="template-component-booking-summary-price-symbol">$</span>
                                            <span class="template-component-booking-summary-price-value">0.00</span>
                                        </h5>
                                        <span>Total Price</span>
                                    </li>

                                </ul>

                            </div>

                            <!-- Content -->
                            <div class="template-component-booking-item-content template-margin-top-reset">

                                <!-- Layout -->
                                <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

                                    <!-- First name -->
                                    <li class="template-layout-column-left template-margin-bottom-reset">
                                        <div class="template-component-form-field">
                                            <label for="booking-form-first-name">First Name *</label>
                                            <input type="text" name="booking-form-first-name" id="booking-form-first-name"/>
                                        </div>
                                    </li>

                                    <!-- Second name -->
                                    <li class="template-layout-column-right template-margin-bottom-reset">
                                        <div class="template-component-form-field">
                                            <label for="booking-form-second-name">Second Name *</label>
                                            <input type="text" name="booking-form-second-name" id="booking-form-second-name"/>
                                        </div>
                                    </li>

                                </ul>

                                <!-- Layout -->
                                <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

                                    <!-- E-mail address -->
                                    <li class="template-layout-column-left template-margin-bottom-reset">
                                        <div class="template-component-form-field">
                                            <label for="booking-form-email">E-mail Address *</label>
                                            <input type="text" name="booking-form-email" id="booking-form-email"/>
                                        </div>
                                    </li>

                                    <!-- Phone number -->
                                    <li class="template-layout-column-right template-margin-bottom-reset">
                                        <div class="template-component-form-field">
                                            <label for="booking-form-phone">Phone Number *</label>
                                            <input type="text" name="booking-form-phone" id="booking-form-phone"/>
                                        </div>
                                    </li>

                                </ul>
                                <ul class="template-layout-100 template-layout-margin-reset template-clear-fix">

                                    <!-- Address -->
                                    <li>
                                        <div class="template-component-form-field">
                                            <label for="booking-form-address">Address *</label>
                                            <textarea rows="1" cols="1" name="booking-form-address" id="booking-form-address"></textarea>
                                        </div>
                                    </li>

                                </ul>

                                <!-- Layout -->
                                <ul class="template-layout-33x33x33 template-layout-margin-reset template-clear-fix">

                                    <!-- Vehicle make -->
                                    <li class="template-layout-column-left template-margin-bottom-reset">
                                        <div class="template-component-form-field">
                                            <label for="booking-form-vehicle-make">Vehicle Make</label>
                                            <input type="text" name="booking-form-vehicle-make" id="booking-form-vehicle-make"/>
                                        </div>
                                    </li>

                                    <!-- Vehicle model -->
                                    <li class="template-layout-column-center template-margin-bottom-reset">
                                        <div class="template-component-form-field">
                                            <label for="booking-form-vehicle-model">Vehicle Model</label>
                                            <input type="text" name="booking-form-vehicle-model" id="booking-form-vehicle-model"/>
                                        </div>
                                    </li>


                                    <!-- Booking date -->
                                    <li class="template-layout-column-right template-margin-bottom-reset">
                                        <div class="template-component-form-field">
                                            <label for="booking-form-date">Booking Date *</label>
                                            <input type="text" data-field="datetime" name="booking-form-date" id="datepicker"/>
                                        </div>
                                    </li>

                                </ul>
                                
                                <!-- Layout -->
                                <ul class="template-layout-33x33x33 template-layout-margin-reset template-clear-fix">

                                    <!-- Vehicle make -->
                                    <li class="template-layout-column-left template-margin-bottom-reset">
                                        <div class="template-component-form-field">
                                            <label for="booking-form-vehicle-registration-number">Vehicle Registration Number</label>
                                            <input type="text" name="booking-form-vehicle-registration-number" id="booking-form-vehicle-registration-number"/>
                                        </div>
                                    </li>

                                    <!-- Vehicle model -->
                                    <li class="template-layout-column-center template-margin-bottom-reset">
                                        <div class="template-component-form-field">
                                            <label for="booking-form-vehicle-color">Vehicle Color</label>
                                            <input type="text" name="booking-form-vehicle-color" id="booking-form-vehicle-color"/>
                                        </div>
                                    </li>


                                    <!-- Booking date -->
                                    <li class="template-layout-column-right template-margin-bottom-reset">
                                        <div class="template-component-form-field">
                                            <label for="booking-form-date">Booking time *</label>
                                            <input type="text"  name="booking-form-time"/>
                                        </div>
                                    </li>

                                </ul>

                                <!-- Layout -->
                                <ul class="template-layout-100 template-layout-margin-reset template-clear-fix">

                                    <!-- Message -->
                                    <li>
                                        <div class="template-component-form-field">
                                            <label for="booking-form-message">Message *</label>
                                            <textarea rows="1" cols="1" name="booking-form-message" id="booking-form-message"></textarea>
                                        </div>
                                    </li>

                                </ul>

                                <!-- Text + submit button -->
                                <div class="template-align-center template-clear-fix template-margin-top-2">
                                    <p class="template-padding-reset template-margin-bottom-2">We will confirm your appointment with you by phone or e-mail within 24 hours of receiving your request.</p>
                                    <input type="hidden" value="" name="booking-form-data" id="booking-form-data"/>
                                    <input type="submit" value="Confirm Booking" class="template-component-button" name="booking-form-submit" id="booking-form-submit"/> 

                                </div>

                            </div>

                        </li>

                    </ul>

                </form>

            </div>

        </div>


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
                            <img src="../../assert/media/image/logo.png" alt="" class="template-logo" />
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
                        By <a href="http://quanticalabs.com" target="_blank">QuanticaLabs</a> &copy; 2016 <a href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=quanticalabs" target="_blank">Auto Spa Template</a>
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