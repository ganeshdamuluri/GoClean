@extends('layouts.auth')
@section('content')
<!-- Content -->
<div class="template-content">

    <!-- Section -->
    <div class="template-section template-section-padding-1 template-clear-fix template-main">

        <!-- Layout 50x50% -->
        <div class="template-layout-50x50 template-clear-fix">


            <!-- Header -->
            <div class="template-component-header-subheader template-align-left">
                <h2>Mr Car Clean</h2>
                <div></div>
                <span>Register your account</span>
            </div>

            <!-- Register form -->
            <form name="contact-form" id="contact-form"  method="POST" action="{{ route('adduser') }}" class="template-component-contact-form">
                {{ csrf_field() }}
                <!-- Layout 50x50% -->
                <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

                    <!-- Left column -->
                    <li class="template-layout-column-left template-margin-bottom-reset">
                        <div class="template-component-form-field template-state-block">
                            <label for="contact-form-name">First Name *</label>
                            <input type="text" id="name" name="first_name" required />
                        </div>
                        <div class="template-component-form-field template-state-block">
                            <label for="contact-form-email">Email *</label>
                            <input id="email" type="email"  name="email" required />
                        </div>
                        <div class="template-component-form-field template-state-block">
                            <label for="contact-form-phone">Password *</label>
                            <input id="password" type="password"  name="password" required />
                        </div> 
                    </li>

                    <!-- Right column -->
                    <li class="template-layout-column-right template-margin-bottom-reset">
                        <div class="template-component-form-field template-state-block">
                            <label for="contact-form-name">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required />
                        </div>
                        <div class="template-component-form-field template-state-block">
                            <label for="contact-form-email">Phone Number *</label>
                            <input type="text"  name="mobile" id="mobile" required />
                        </div>
                        <div class="template-component-form-field template-state-block">
                            <label for="contact-form-phone">Confirm Password *</label>
                            <input id="confirm_password" type="password"  name="confirm_password" required />
                        </div>
                    </li>

                </ul>

                <!-- Button -->
                <div class="template-align-center template-clear-fix template-margin-top-1">
                    <span class="template-state-block">
                        <button type="submit" class="template-component-button">
                            Register
                        </button>
                    </span>
                </div>

            </form>

        </div>

    </div>

</div>
@endsection