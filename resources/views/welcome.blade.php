
@include("layouts.header")


<body>

<nav class="uk-navbar-container" uk-navbar>

        <div class="uk-navbar-right">

            <!-- Right Side Of Navbar -->
            <ul class="uk-navbar-nav">
                <!-- Authentication Links -->

                <li><a href="">English</a></li> <li><a href="">English</a></li> <li><a href="">English</a></li>
            </ul>
        </div>
</nav>

    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-right">
            @if (Route::has('login'))
            <ul class="uk-navbar-nav">
                @auth
                <li class="uk-active"> <a href="{{ url('/home') }}">Home</a></li>
                @else
                    <li class="uk-active"> <a href="{{ url('/home') }}">Home</a></li>
                    <li class="uk-active"> <a href="{{ url('/home') }}">service</a></li>
                    <li class="uk-active"> <a href="{{ url('/home') }}">about</a></li>
                    <li class="uk-active"> <a href="{{ url('/home') }}">contact</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            </ul>
            @endif

        </div>
    </nav>


</body>



@include("layouts.footer")

