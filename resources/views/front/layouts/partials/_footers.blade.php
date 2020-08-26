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
                    <li><a href="{{ route('front.homepage') }}" title="Accueil"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
                    <li><a href="{{ route('front.appointement') }}" title="Comment prendre rendez-vous ?"><i class="fa fa-angle-double-right"></i>Comment prendre rendez-vous ?</a></li>
                    <li><a href="{{ route('front.prices') }}" title="Nos tarifs"><i class="fa fa-angle-double-right"></i>Nos tarifs</a></li>
                    <li><a href="{{ route('front.contacts') }}" title="Nous contacter"><i class="fa fa-angle-double-right"></i>Nous contacter</a></li>
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
                <h5>Nous contacter</h5>
                <a href="{{ route('front.contacts') }}" class="boxed-btn4" title="Nous contacter">Nous contacter</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item">
                        <a href="" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="mailto:" target="_blank" title="Email"><i class="fa fa-envelope"></i></a>
                    </li>
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
