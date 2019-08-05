@include("layouts.header")

<body>
@include("layouts.app")



<div class="uk-container">
    <div class="uk-section uk-center">

            <div class="uk-card-default">
                <div class="uk-card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">


                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="uk-margin">
                                <input id="email" type="email" class="uk-input uk-form-width-large @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <div uk-alert>
                                    <a class="uk-alert-close" uk-close></a>

                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>



                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="uk-input uk-form-width-large @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <div uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>



                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="uk-margin">
                                <input id="password-confirm" type="password" class="uk-input uk-form-width-large" name="password_confirmation" required autocomplete="new-password">
                            </div>


                            <div class="uk-margin">
                                <button type="submit" class="uk-button-default uk-button-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
@include("layouts.footer")
