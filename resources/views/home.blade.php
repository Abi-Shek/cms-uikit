@include("layouts.header")
<body>

@include('layouts.app')


<div class="uk-container">

    <div class="uk-grid">
        <div class="uk-width-1-3">

            <div class="uk-card-default uk-card-body">
                <h2>category</h2>
                <div class="uk-list">
                    <li><a href=""> hello</a></li>
                    <li><a href=""> hello</a></li>
                    <li><a href=""> hello</a></li>
                    <li><a href=""> hello</a></li>
                    <li><a href=""> hello</a></li>
                </div>
        </div>


    </div>

        <div class="uk-width-2-3">
            <div class="uk-card-default uk-card-body">
                <div class="uk-card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

</body>
@include("layouts.footer")
