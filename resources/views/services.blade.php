<x-layout title="{{__('services.hero_title')}}">

    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="h1">{{__('services.hero_title')}}</h1>
                    <p class="text-lg mb-32">{{__('services.hero_paragraph')}}</p>
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
            <div class="features-wrap grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($services as $service)
                    <div class="feature">
                        <div class="feature-inner text-center">
                            <a href="/service/{{ $service['id'] }}">
                                <h3 class="text-lg font-semibold text-white">{{ $service['service_name'] }}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <style>
        .feature-inner {
            transition: all 0.1s ease;
            padding: 32px;
            border-radius: 8px;
        }
        .feature-inner:hover {
            background: rgba(36, 40, 48, 0.5);
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

    <style>
        .feature-inner:hover {
            transform: translateY(-10px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.3);
        }

        .features-wrap {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 32px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const features = document.querySelectorAll('.is-revealing');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, {threshold: 0.2});

            features.forEach(feature => {
                feature.style.opacity = 0;
                feature.style.transform = 'translateY(20px)';
                observer.observe(feature);
            });
        });
    </script>


</x-layout>
