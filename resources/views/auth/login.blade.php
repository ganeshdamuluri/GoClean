@extends('layouts.auth')
@section('content')
<!-- Content -->
<div class="template-content">

    <!-- Section -->
    <div class="template-section template-section-padding-1 template-clear-fix template-main">

        <!-- Layout 50x50% -->
        <div class="template-layout-50x50 template-clear-fix">

            <!-- Left column -->
            <div class="template-layout-column-left">

                <!-- Header -->
                <div class="template-component-header-subheader template-align-left">
                    <h2>Mr Car Clean</h2>
                    <div></div>
                    <span>Login to your account</span>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- Login form -->
                <form name="contact-form" id="contact-form" method="POST" action="{{ route('login') }}" class="template-component-contact-form">
                    {{ csrf_field() }} 
                    <div class="template-component-form-field template-state-block">
                        <label for="contact-form-email">Your Email *</label>
                        <input id="email" type="email" class="form-control" name="email" required autofocus/>
                    </div>
                    <div class="template-component-form-field template-state-block">
                        <label for="contact-form-password">Your Password *</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>

                    <!-- Button -->
                    <div class="template-align-center template-clear-fix template-margin-top-1">
                        <span class="template-state-block">
                            <!--<input type="submit" value="Submit" class="template-component-button" name="contact-form-submit" id="contact-form-submit"/>-->
                            <button type="submit" class="template-component-button">
                                Login
                            </button>
                        </span>
                        <span class="template-state-block" style="padding-left:10px;">
                            <a href="{{ url('/redirect') }}" class="btn btn-primary">
                                Login With Google
                            </a>
                        </span>
                    </div>
                    <a href="{{ url('/register') }}" class="btn btn-primary">
                        No Account yet? Register here
                    </a>
                </form>

            </div>

            <div class="template-layout-column-right template-margin-bottom-reset">

                <!-- Image -->
                <div class="template-component-image template-component-image-preloader">
                    <a href="../../assets/media/image/sample/760x506/image_06.jpg" class="template-fancybox" data-fancybox-group="gallery-1">
                        <img src="../../assets/media/image/sample/760x506/image_06.jpg" alt=""/>
                        <span class="template-component-image-hover"></span>
                    </a>
                </div>
                <!-- Layout 50x50% -->
                <div class="template-layout-50x50 template-clear-fix">

                    <!-- Left column -->
                    <div class="template-layout-column-left template-margin-bottom-reset">
                        <div class="template-component-space template-component-space-1"></div>
                        <div class="template-component-image template-component-image-preloader">
                            <a href="../../assets/media/image/sample/760x506/image_09.jpg" class="template-fancybox" data-fancybox-group="gallery-1">
                                <img src="../../assets/media/image/sample/460x306/image_09.jpg" alt=""/>
                                <span class="template-component-image-hover"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Right column -->
                    <div class="template-layout-column-right">
                        <div class="template-component-space template-component-space-1"></div>
                        <div class="template-component-image template-component-image-preloader">
                            <a href="../../assets/media/image/sample/760x506/image_10.jpg" class="template-fancybox" data-fancybox-group="gallery-1">
                                <img src="../../assets/media/image/sample/460x306/image_10.jpg" alt=""/>
                                <span class="template-component-image-hover"></span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection