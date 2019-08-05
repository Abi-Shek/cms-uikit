@include('layouts.header')

@include('layouts.app')




            <div class="uk-card-default uk-card-body uk-text-center">
                <div class="uk-card-header">{{ __('Reset Password') }}</div>

                <div class="uk-card-body">
                    @if (session('status'))
                        <div uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf


                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="uk-margin">
                                <input id="email" type="email" class="uk-input  uk-form-width-large @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <div uk-alert>
                                        <a class="uk-alert-close" uk-close></a>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>



                            <div class="uk-margin">
                                <button type="submit" class=" uk-button-default  uk-button uk-button-primary uk-form-width-large">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>

                    </form>
                </div>
            </div>


@include('layouts.footer')
