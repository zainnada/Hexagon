<x-layout title="{{__('layout.home')}}">
    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="hero-title mt-0">{{__('home.hero_title')}}</h1>
                    <p class="hero-paragraph">{{__('home.hero_paragraph')}}</p>
                    <div class="hero-cta">
                        <a class="button button-primary" href="/services">{{__('layout.cta_explore')}}</a>
                        <a class="button" href="/contact">{{__('layout.cta_contact')}}</a>
                    </div>
                </div>
                <div class="hero-figure anime-element">
                    <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                        <rect width="528" height="396" style="fill:transparent;"/>
                    </svg>
                    <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                    <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                    <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                    <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                    <div class="hero-figure-box hero-figure-box-05"></div>
                    <div class="hero-figure-box hero-figure-box-06"></div>
                    <div class="hero-figure-box hero-figure-box-07"></div>
                    <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                    <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                    <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="features section">
        <div class="container">
            <div class="features-inner section-inner has-bottom-divider">

                <div class="features-wrap">
                    @foreach(__('home.features') as $feature)
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="{{asset('images/feature-icon-0'.($loop->index + 1).'.svg')}}"
                                         alt="Feature {{$loop->index + 1}}">
                                </div>
                                <h4 class="feature-title mt-24">{{ $feature['title'] }}</h4>
                                <p class="text-sm mb-0">{{ $feature['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="pricing section">
        <div class="container-sm">
            <div class="pricing-inner section-inner">
                <div class="pricing-header text-center">
                    <h2 class="section-title mt-0">{{ __('home.pricing.title') }}</h2>
                    <p class="section-paragraph mb-0">{{ __('home.pricing.paragraph') }}</p>
                </div>
                <div class="pricing-tables-wrap">
                    <div class="pricing-table">
                        <div class="pricing-table-inner is-revealing">
                            <div class="pricing-table-main">
                                <div class="pricing-table-header pb-24">
                                    <div class="pricing-table-price">
                                        <span
                                            class="pricing-table-price-currency h2">{{ __('home.pricing.price_currency') }}</span>
                                        <span
                                            class="pricing-table-price-amount h1">{{ __('home.pricing.price_amount') }}</span>
                                        <span class="text-xs">{{ __('home.pricing.price_period') }}</span>
                                    </div>
                                </div>
                                <div
                                    class="pricing-table-features-title text-xs pt-24 pb-24">{{ __('home.pricing.features_title') }}</div>
                                <ul class="pricing-table-features list-reset text-xs">
                                    @foreach(__('home.pricing.features') as $feature)
                                        <li><span>{{ $feature }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing-table-cta mb-8">
                                <a class="button button-primary button-shadow button-block"
                                   href="/services">{{__('layout.cta_explore')}}</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <section class="cta section">
        <div class="container">
            <div class="cta-inner section-inner">
                <h3 class="section-title mt-0">{{__('layout.cta_question')}}</h3>
                <div class="cta-cta">
                    <a class="button button-primary button-wide-mobile" href="/contact">{{__('layout.cta_contact')}}</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
