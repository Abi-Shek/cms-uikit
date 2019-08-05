@include("layouts.header")
@include("layouts.app")
<div class="uk-container">


            <div class="uk-card  uk-card-default uk-card-body uk-text-center">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="uk-card-body uk-text-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="uk-margin">
                                <input id="name" type="text" class="uk-input uk-form-width-large @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <div uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                        <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>



                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="uk-margin">
                                <input id="email" type="email" class=" uk-input uk-form-width-large @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <div uk-alert>
                                        <a class="uk-alert-close" uk-close></a>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>



                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="uk-margin">
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
                                <button type="submit" class="uk-button uk-button-default uk-button-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include("layouts.footer")
