@include("layouts.header")
<body>
@include("layouts.app")







<div class="uk-container">


            <div class=" uk-card-body uk-card-default u">
                <div class="uk-card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="uk-card-body">
                    @if (session('resent'))
                        <div uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>

</body>
