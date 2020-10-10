<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row text-center text-sm-center text-sm-left text-md-left">
            <div class="col-sm-12 col-sm-4 col-md-3">
                <img src="{{ asset('front/img/logos/logo.png') }}" class="img-responsive" alt="Logo docteur de garde" />
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <h5>Liens</h5>
                <ul class="list-unstyled quick-links">
                    <li>
                        <a href="{{ route('front.homepage') }}" title="{{ __('globals.website.navbar.accueil') }}">
                            <i class="fa fa-angle-double-right"></i>
                            {{ __('globals.website.navbar.accueil') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.appointement') }}" title="{{ __('globals.website.navbar.qui-sommes-nous') }}">
                            <i class="fa fa-angle-double-right"></i>
                            {{ __('globals.website.navbar.qui-sommes-nous') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.appointement') }}" title="{{ __('globals.website.navbar.comment-prendre-rendez-vous') }}">
                            <i class="fa fa-angle-double-right"></i>
                            {{ __('globals.website.navbar.comment-prendre-rendez-vous') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.prices') }}" title="{{ __('globals.website.navbar.tarifs') }}">
                            <i class="fa fa-angle-double-right"></i>
                            {{ __('globals.website.navbar.tarifs') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.contacts') }}" title="{{ __('globals.website.navbar.contact') }}">
                            <i class="fa fa-angle-double-right"></i>
                            {{ __('globals.website.navbar.contact') }}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-12 col-sm-4 col-md-3">
                <h5>Liens externe</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="" title=""><i class="fa fa-angle-double-right"></i>Lien externe 1</a></li>
                    <li><a href="" title=""><i class="fa fa-angle-double-right"></i>Lien externe 2</a></li>
                    <li><a href="" title=""><i class="fa fa-angle-double-right"></i>Lien externe 3</a></li>
                </ul>
            </div>

            <div class="col-sm-12 col-sm-4 col-md-3">
                <h5>{{ __('globals.website.navbar.contact') }}</h5>
                <a href="{{ route('front.contacts') }}" class="boxed-btn4" title="{{ __('globals.website.navbar.contact') }}">
                    {{ __('globals.website.navbar.contact') }}
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    @foreach($social_network as $item)
                        <li class="list-inline-item">
                            <a href="{{ $item->link }}" target="_blank" title="{{ $item->title }}">
                                <i class="{{ $item->icon }}"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-2 mt-sm-2">
                <p class="text-center">Copyright © {{ date('Y') }} - {{ config('app.name') }}.</p>
                <span class="d-flex justify-content-center font-italic small">v1.0</span>
            </div>
        </div>
    </div>
</footer>
<!-- ./Footer -->
