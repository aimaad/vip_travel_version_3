@php
    $uniqueID_register = 'terms_id' . uniqid();
@endphp
<form class="form bravo-form-register" method="post" action="{{route('auth.register.store')}}">
    @csrf
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="form-group input-with-icon">
                <input type="text" class="form-control" name="first_name" autocomplete="off" placeholder="{{__('First Name')}}">
                <i class="input-icon field-icon icofont-waiter-alt"></i>
                <span class="invalid-feedback error error-first_name"></span>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="form-group input-with-icon">
                <input type="text" class="form-control" name="last_name" autocomplete="off" placeholder="{{__('Last Name')}}">
                <i class="input-icon field-icon icofont-waiter-alt"></i>
                <span class="invalid-feedback error error-last_name"></span>
            </div>
        </div>
    </div>
    <div class="form-group input-with-icon">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/4x3/ma.svg" alt="Moroccan Flag" style="width: 24px; height: 16px;">
                    +212
                </span>
            </div>
            <input type="text" class="form-control" name="phone" autocomplete="off" placeholder="{{__('Phone')}}">
        </div>
        <i class="input-icon field-icon icofont-ui-touch-phone"></i>
        <span class="invalid-feedback error error-phone"></span>
    </div>
    <div class="form-group input-with-icon">
        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="{{__('Email address')}}">
        <i class="input-icon field-icon icofont-mail"></i>
        <span class="invalid-feedback error error-email"></span>
    </div>
    <div class="form-group input-with-icon">
        <input type="password" class="form-control" name="password" autocomplete="off" placeholder="{{__('Password')}}">
        <i class="input-icon field-icon icofont-ui-password"></i>
        <span class="invalid-feedback error error-password"></span>
    </div>
    <div class="form-group input-with-icon">
        <label for="term">
            <input id="{{ $uniqueID_register }}" type="checkbox" name="term" class="mr5">
            {!! __("I have read and accept the <a href=':link' target='_blank'>Terms and Privacy Policy</a>",['link'=>get_page_url(setting_item('booking_term_conditions'))]) !!}
            <span class="checkmark fcheckbox"></span>
        </label>
        <div><span class="invalid-feedback error error-term"></span></div>
    </div>
    @if(setting_item("user_enable_register_recaptcha"))
        <div class="form-group">
            {{recaptcha_field($captcha_action ?? 'register')}}
        </div>
        <div><span class="invalid-feedback error error-g-recaptcha-response"></span></div>
    @endif
    <div class="error message-error invalid-feedback"></div>
    <div class="form-group input-with-icon">
        <button type="submit" class="btn btn-primary form-submit">
            {{ __('Sign Up') }}
            <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
        </button>
    </div>
    @if(setting_item('facebook_enable') or setting_item('google_enable') or setting_item('twitter_enable'))
        <div class="advanced">
            <p class="text-center f14 c-grey">{{__('or continue with')}}</p>
            <div class="row">
                @if(setting_item('facebook_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('/social-login/facebook')}}" class="btn btn_login_fb_link"
                           data-channel="facebook">
                            <i class="input-icon fa fa-facebook"></i>
                            {{__('Facebook')}}
                        </a>
                    </div>
                @endif
                @if(setting_item('google_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('social-login/google')}}" class="btn btn_login_gg_link" data-channel="google">
                            <i class="input-icon fa fa-google"></i>
                            {{__('Google')}}
                        </a>
                    </div>
                @endif
                @if(setting_item('twitter_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('social-login/twitter')}}" class="btn btn_login_tw_link" data-channel="twitter">
                            <i class="input-icon fa fa-twitter"></i>
                            {{__('Twitter')}}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    @endif
</form>
