<x-layout title="{{__('layout.about')}}">

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="h1">{{ __('about.hero_title') }}</h1>
                    <p class="text-lg mb-32">{{ __('about.hero_paragraph') }}</p>
                </div>
                <div class="hero-figure anime-element">
                    <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                        <rect width="528" height="396" style="fill:transparent;"/>
                    </svg>
                    <div class="hero-figure-box hero-figure-box-01" data-rotation="-50deg"></div>
                    <div class="hero-figure-box hero-figure-box-02" data-rotation="135deg"></div>
                    <div class="hero-figure-box hero-figure-box-03" data-rotation="30deg"></div>
                    <div class="hero-figure-box hero-figure-box-04" data-rotation="-20deg"></div>
                    <div class="hero-figure-box hero-figure-box-05"></div>
                    <div class="hero-figure-box hero-figure-box-06"></div>
                    <div class="hero-figure-box hero-figure-box-07"></div>
                    <div class="hero-figure-box hero-figure-box-08" data-rotation="80deg"></div>
                    <div class="hero-figure-box hero-figure-box-09" data-rotation="27deg"></div>
                    <div class="hero-figure-box hero-figure-box-10" data-rotation="50deg"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section-inner">
        <div class="container container-sm">
            <div class="has-bottom-divider pb-48">
                <h2 class="h2 text-center mb-32">{{ __('about.mission_title') }}</h2>
                <div class="text-center">
                    <p class="text-lg mb-24">{{ __('about.mission_paragraph') }}</p>
                    <div class="feature-icon mb-24">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"
                                stroke="#0270D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="section-inner" style="background: #15181D;">
        <div class="container">
            <h2 class="h2 text-center mb-48">{{ __('about.technology_title') }}</h2>
            <div class="features-wrap">
                @foreach(__('about.technology') as $tech)
                    <div class="feature">
                        <div class="feature-inner">
                            <div class="feature-icon mb-24">
                                <div
                                    style="width: 48px; height: 48px; background: rgba(2, 112, 215, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <span style="color: #0270D7; font-size: 24px;">{{ $tech['icon'] }}</span>
                                </div>
                            </div>
                            <h3 class="h4 mb-16">{{ $tech['title'] }}</h3>
                            <p class="text-sm">{{ $tech['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section class="section-inner">
        <div class="container container-sm">
            <h2 class="h2 text-center mb-48">{{__('about.process_title')}}</h2>

            <div class="mb-48">
                <?php $count = 0; ?>
                @foreach(__('about.process_steps') as $process)
                        <?php $count++; ?>
                    <div class="has-bottom-divider pb-32 mb-32">
                        <h3 class="h4 mb-16 text-primary">{{$process['title']}}</h3>
                        <p class="text-sm">{{$process['description']}}</p>
                    </div>
                    @if($count===2)
                        <div class="mb-64">
                        <pre style="background: #242830; padding: 16px; border-radius: 4px; font-size: 14px;">
                            <span style="color: #0270D7;">// Example from our codebase</span>
                            <span style="color: #8A94A7;">Route::</span><span style="color: #00BFFB;">get</span>('<span
                                style="color: #fff;">/about</span>', <span
                                style="color: #8A94A7;">[AboutController::</span><span
                                style="color: #00BFFB;">class</span>, '<span style="color: #fff;">index</span>']);
                        </pre>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section-inner team-section" style="background: #242830;">
        <div class="container">
            <h2 class="h2 text-center mb-48">{{__('about.team_title')}}</h2>
            <div class="features-wrap">
                @foreach(__('about.team') as $team_member)
                    <div class="feature">
                        <div class="feature-inner text-center">
                            <div class="mb-24">
                                <div
                                    style="width: 120px; height: 120px; background: #2C3039; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; font-size: 40px;">
                                    {{$team_member['icon']}}
                                </div>
                            </div>
                            <h3 class="h4 mb-8">{{$team_member['name']}}</h3>
                            <p class="text-xs mb-16">{{$team_member['role']}}</p>
                            <div class="text-sm">
                                @foreach($team_member['skills'] as $skill)
                                    <span style="color: #0270D7;">●</span> {{$skill}}<br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Stats Counter -->
    <section class="section-inner">
        <div class="container">
            <div class="has-bottom-divider pb-48">
                <div class="features-wrap">

                    @foreach(__('about.stats') as $stats)
                        <div class="feature">
                            <div class="feature-inner text-center">
                                <div class="counter-value h1 mb-16" data-count="{{$stats['count']}}">0</div>
                                <p class="text-sm">{{$stats['title']}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
        <div class="container-sm">
            <div class="cta-inner has-top-divider has-bottom-divider">
                <div class="cta-header">
                    <h2 class="h2 mb-16">{{__('about.cta_title')}}</h2>
                    <p class="text-sm">{{__('about.cta_paragraph')}}</p>
                </div>
                <div class="cta-action">
                    <a href="/contact" class="button button-primary button-wide-mobile">{{__('layout.cta_contact')}}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple JavaScript for counter animation -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Counter animation
            const counters = document.querySelectorAll('.counter-value');

            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                const duration = 2000;
                const increment = target / (duration / 16);
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };

                // Start counter when in viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                }, {threshold: 0.5});

                observer.observe(counter);
            });

            // Simple hover effect for feature cards
            const features = document.querySelectorAll('.feature-inner');
            features.forEach(feature => {
                feature.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-8px)';
                    this.style.transition = 'transform 0.3s ease';
                });

                feature.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>

    <style>
        /* Additional styles for about page */
        .counter-value {
            color: #0270D7;
            font-weight: 700;
        }

        .feature-inner {
            transition: all 0.3s ease;
            padding: 32px;
            border-radius: 8px;
        }

        .feature-inner:hover {
            background: rgba(36, 40, 48, 0.5);
        }

        pre {
            background: #242830 !important;
            border: 1px solid rgba(138, 148, 167, 0.1);
            border-radius: 4px;
            font-family: 'Monaco', 'Consolas', monospace;
        }

        .cta-action {
            display: flex;
            align-items: center;
        }

        @media (min-width: 641px) {
            .cta-inner {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .cta-header {
                flex: 1;
                padding-right: 48px;
            }

            .cta-action {
                flex: none;
            }
        }
    </style>

</x-layout>
