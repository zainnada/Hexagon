<x-layout title="Service">

    <!-- Service Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="h1">{{$service['service_name']??''}} Service</h1>
                    <p class="text-lg mb-32">{{$service['service_description']??''}}</p>
                    <p class="text-lg mb-32">{{$service['service_price']??''}}$ USD</p>
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
            <div class="hero-cta">
                <a class="button" href="/services">{{__('services.back')}}</a>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta cta-custom">
        <div class="container-sm">
            <div class="cta-inner has-top-divider has-bottom-divider">
                <div class="cta-header">
                    <h2 class="h2 mb-16">{{__('services.cta_title')}}</h2>
                    <p class="text-sm">{{__('services.cta_text')}}</p>
                </div>
                <div class="cta-action">
                    <a href="/contact" class="button button-primary button-wide-mobile">
                        {{__('layout.cta_contact')}}
                    </a>
                </div>
            </div>
        </div>
    </section>


</x-layout>
