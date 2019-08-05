@include('layouts.header')


<body>
@include('layouts.app')

<div class="uk-container">


            <div class="uk-card-default uk-card-body uk-text-center">
                <div class="uk-card-header"><h3>{{ __('Login') }}</h3></div>

                <div class="uk-card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf



                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>



                            <div class="uk-margin">

                                <input id="email" class="uk-input uk-form-width-large @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" placeholder="Input">




{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

                                @error('email')
                                <div uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    <strong>{{ $message }}</strong>
                                </div>

                                @enderror
                            </div>




                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="uk-margin">
                                <input id="password" type="password" class="uk-input uk-form-width-large @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')

                                <div uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>


                                <div class="uk-margin">
                                    <input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>




                            <div class="uk-margin">
                                <button type="submit" class=" uk-button uk-button-default uk-button-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@include("layouts.footer")
