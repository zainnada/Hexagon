<x-layout title="{{ __('faq.title') }}">
    <section class="section-inner">
        <div class="container container-sm">
            <h2 class="h2 text-center mb-48">{{ __('faq.title') }}</h2>
            <div class="faq-list">
                @foreach(__('faq.faqs') as $index => $faq)
                    <div class="faq-item mb-24" style="border-bottom: 1px solid #242830; padding-bottom: 24px;">
                        <button class="faq-question" onclick="toggleFAQ({{ $index }})"
                                style="background: none; border: none; color: #fff; font-size: 18px; font-weight: 600; text-align: left; width: 100%; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <span>{{ $faq['question'] }}</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 style="transition: transform 0.3s ease;" id="faq-icon-{{ $index }}">
                                <path d="M6 9L12 15L18 9" stroke="#0270D7" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="faq-answer mt-16" id="faq-answer-{{ $index }}">
                            <p class="text-sm" style="color: #8A94A7;">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
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
    </section>

    <script>
        // FAQ Toggle Function
        function toggleFAQ(index) {
            const answer = document.getElementById('faq-answer-' + index);
            const icon = document.getElementById('faq-icon-' + index);

            answer.classList.toggle('active');

            if (answer.classList.contains('active')) {
                icon.style.transform = 'rotate(180deg)';
            } else {
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Open all FAQs by default
        // document.addEventListener('DOMContentLoaded', function() {
        //     for (let i = 0; i < 4; i++) {
        //         setTimeout(() => toggleFAQ(i), i * 100);
        //     }
        // });
    </script>

    <style>
        /* FAQ Animation */
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: all 0.3s ease;
        }
        .faq-answer.active {
            max-height: 200px;
            opacity: 1;
        }
    </style>

</x-layout>
