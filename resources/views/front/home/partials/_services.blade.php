@isset($services)
    <section id="service" class="section-bg-grey section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2 class="page-title">{{ $services->title }}</h2>
                    <hr class="botm-line page-botm-line">
                    <p class="page-content">{!! $services->content !!}</p>
                </div>

                <div class="service col-md-8 col-sm-12">
                    <div class="container">
                        <div class="row">
                            @forelse($services->service as $item)
                                <div class="col-md-6 col-sm-12">
                                    <div class="service-info card">
                                        <div class="icon">
                                            <i class="{{ $item->icon }}"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h4>{{ $item->title }}</h4>
                                            <p>{!! $item->content !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <span class="text-muted">{{ __('globals.services.empty') }}</span>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endisset
