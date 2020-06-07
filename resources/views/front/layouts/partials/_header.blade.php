<!-- header-start -->
<header>
    <div class="header-area">
        <div class="header-top_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_top_wrap d-flex justify-content-between align-items-center">
                            <div class="text_wrap">
                                <p>
                                    <span>{{ __('globals.website.name') }}</span>
                                    <span>{{ __('globals.website.info') }}</span>
                                </p>
                            </div>
                            <div class="text_wrap">
                                <p>
                                    @auth
                                        <a href="/nova" class="auth-link">
                                            <i class="fas fa-tachometer-alt"></i> {{ __('globals.website.back-office') }}
                                        </a>

                                        <a class="auth-link" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i> {{ __('auth.logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endauth
                                    @guest
                                        <a href="{{ route('login') }}" class="auth-link">
                                            <i class="far fa-user"></i> {{ __('auth.login') }}
                                        </a>
                                    @endguest
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav -->
        <div class="navigation-wrap bg-light start-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-md navbar-light">

                            <a class="navbar-brand" href="{{ route('front.homepage') }}">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/logo.svg"
                                     alt="logo docteur de garde">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- https://codepen.io/ig_design/pen/omQXoQ -->
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto py-4 py-md-0">
                                    @foreach(config('docteurs_gardes.navbar') as $item)
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="#{{ $item['name'] }}">
                                                {{ __('globals.website.navbar.' . $item['name']) }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- /end -->

    </div>
</header>
<!-- header-end -->