<x-layout title="{{__('services.hero_title')}}">

    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="h1">{{__('services.hero_title')}}</h1>
                    <p class="text-lg mb-32">{{__('services.hero_paragraph')}}</p>
                    <a class="button" href="/services/create">{{__('services.create')}}</a>
                </div>
                <div class="hero-figure anime-element">
                    <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                        <rect width="528" height="396" style="fill:transparent;"/>
                    </svg>
                    <div class="hero-figure-box hero-figure-box-01" data-rotation="125deg"></div>
                    <div class="hero-figure-box hero-figure-box-02" data-rotation="-60deg"></div>
                    <div class="hero-figure-box hero-figure-box-03" data-rotation="67deg"></div>
                    <div class="hero-figure-box hero-figure-box-04" data-rotation="25deg"></div>
                    <div class="hero-figure-box hero-figure-box-05"></div>
                    <div class="hero-figure-box hero-figure-box-06"></div>
                    <div class="hero-figure-box hero-figure-box-07"></div>
                    <div class="hero-figure-box hero-figure-box-08" data-rotation="135deg"></div>
                    <div class="hero-figure-box hero-figure-box-09" data-rotation="180deg"></div>
                    <div class="hero-figure-box hero-figure-box-10" data-rotation="30deg"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-inner">
        <div class="container">
            <h2 class="h2 text-center mb-48">{{ __('services.hero_title') }}</h2>
            <div class="features-wrap">
                @foreach($services as $service)
                    <div class="feature">
                        <div class="feature-inner text-center">
                            <div class="feature-icon mb-24">
                                <div
                                    style="width: 64px; height: 64px; background: rgba(2, 112, 215, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 28px; color: #0270D7;">
                                    {{ strtoupper(substr($service->service_name, 0, 1)) }}
                                </div>
                            </div>
                            <h3 class="h4 mb-24">{{ $service->service_name }}</h3>
                            <a href="/services/{{ $service->id }}" class="button button-sm">{{__('services.show')}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
<style>
    .features-wrap {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 32px;
        justify-items: center;
    }

    .feature-inner {
        padding: 32px;
        border-radius: 8px;
        background-color: rgba(36, 40, 48, 0.2);
        transition: all 0.3s ease;
    }

    .feature-inner:hover {
        background: rgba(36, 40, 48, 0.5);
        transform: translateY(-8px);
    }

    .feature-icon {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

    <!-- Call to Action Section -->
    <section class="cta section">
        <div class="container">
            <div class="cta-inner section-inner has-top-divider has-bottom-divider">
                <div class="cta-header">
                    <h2 class="h2 mb-16">{{__('services.cta_title')}}</h2>
                    <p class="text-sm mb-24">{{__('services.cta_text')}}</p>
                </div>
                <a href="/contact" class="button button-primary button-wide-mobile">{{__('layout.cta_contact')}}</a>
            </div>
        </div>
    </section>

</x-layout>
