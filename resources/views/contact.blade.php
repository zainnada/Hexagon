<x-layout title="{{__('layout.contact')}}">

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">

            @if(session('success'))
                <div id="flash-message"
                     class="fixed top-4 left-1/2 transform -translate-x-1/2 bg-green-500 text-white p-4 rounded shadow-lg z-50 transition-opacity duration-500 opacity-100">
                    {{ session('success') }}
                </div>
            @endif

            <script>
                window.addEventListener('DOMContentLoaded', () => {
                    const flash = document.getElementById('flash-message');
                    if (flash) {
                        setTimeout(() => {
                            flash.style.opacity = '0';
                            setTimeout(() => flash.remove(), 500);
                        }, 3000);
                    }
                });
            </script>

            <style>
                #flash-message {
                    font-family: 'Inter', sans-serif;
                    font-weight: 500;
                    letter-spacing: 0.5px;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                    border-left: 4px solid #10B981;
                }

                #flash-message::before {
                    content: "✔";
                    margin-right: 8px;
                    font-weight: bold;
                }
            </style>

            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="h1">{{__('contact.hero_title')}}</h1>
                    <p class="text-lg mb-32">{{__('contact.hero_paragraph')}}</p>
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

    <!-- Contact Info -->
    <section class="section-inner">
        <div class="container container-sm">
            <div class="has-bottom-divider pb-48 mb-48">
                <h2 class="h2 text-center mb-48">{{__('contact.info_title')}}</h2>
                <div class="features-wrap">
                    @foreach(__('contact.contact_info') as $contact)
                        <div class="feature">
                            <div class="feature-inner text-center">
                                <div class="feature-icon mb-24">
                                    <div
                                        style="width: 64px; height: 64px; background: rgba(2, 112, 215, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z"
                                                stroke="#0270D7" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                                stroke="#0270D7" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="h4 mb-16">{{$contact['title']}}</h3>
                                @foreach($contact['info'] as $info)
                                    <p class="text-sm mb-8">{{$info}}</p>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="section-inner" style="background: #15181D;">
        <div class="container container-sm">
            <div class="has-bottom-divider pb-48">
                <h2 class="h2 text-center mb-48">{{__('contact.form_title')}}</h2>

                <form action="/contact" method="POST" class="contact-form" id="contactForm">
                    @csrf

                    <div class="field-grouped mb-24">
                        <div class="control control-expanded">
                            <label class="text-sm mb-8" style="display: block;">{{__('contact.form_name')}}</label>
                            <input type="text" name="name" class="input" placeholder="{{__('contact.form_name_placeholder')}}" required
                                   value="">
                        </div>
                        <div class="control control-expanded">
                            <label class="text-sm mb-8" style="display: block;">{{__('contact.form_email')}}</label>
                            <input type="email" name="email" class="input" placeholder="{{__('contact.form_email_placeholder')}}" required
                                   value="">
                        </div>
                    </div>

                    <div class="mb-24">
                        <label class="text-sm mb-8" style="display: block;">{{__('contact.form_subject')}}</label>
                        <input type="text" name="subject" class="input" placeholder="{{__('contact.form_subject_placeholder')}}" required
                               value="">
                    </div>

                    <div class="mb-24">
                        <label class="text-sm mb-8" style="display: block;">{{__('contact.form_message')}}</label>
                        <textarea name="message" class="textarea" rows="6"
                                  placeholder="{{__('contact.form_message_placeholder')}}"
                                  required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="button button-primary button-wide-mobile"
                                style="min-width: 200px;">
                            <span class="button-text">{{__('contact.form_submit')}}</span>
                            <span class="button-loading" style="display: none;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" style="animation: spin 1s linear infinite;">
                                <path d="M12 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M12 18V22" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M4.93 4.93L7.76 7.76" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M16.24 16.24L19.07 19.07" stroke="white" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12H6" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M18 12H22" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M4.93 19.07L7.76 16.24" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M16.24 7.76L19.07 4.93" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Map/CTA Section -->
    <section class="cta cta-custom">
        <div class="container-sm">
            <div class="cta-inner has-top-divider has-bottom-divider">
                <div class="cta-header">
                    <h2 class="h2 mb-16">{{__('contact.cta_title')}}</h2>
                    <p class="text-sm">{{__('contact.cta_paragraph')}}</p>
                </div>
                <div class="cta-action">
                    <a href="/faq" class="button button-primary button-wide-mobile">
                        {{__('contact.cta_button')}}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Form submission handling
            const contactForm = document.getElementById('contactForm');
            const submitBtn = contactForm?.querySelector('button[type="submit"]');
            const buttonText = submitBtn?.querySelector('.button-text');
            const buttonLoading = submitBtn?.querySelector('.button-loading');

            if (contactForm) {
                contactForm.addEventListener('submit', function () {
                    if (submitBtn && buttonText && buttonLoading) {
                        buttonText.style.display = 'none';
                        buttonLoading.style.display = 'inline-block';
                        submitBtn.disabled = true;
                    }
                });
            }

            // Auto-resize textarea
            const textarea = document.querySelector('textarea[name="message"]');
            if (textarea) {
                textarea.addEventListener('input', function () {
                    this.style.height = 'auto';
                    this.style.height = (this.scrollHeight) + 'px';
                });

                // Initial resize
                setTimeout(() => {
                    textarea.style.height = 'auto';
                    textarea.style.height = (textarea.scrollHeight) + 'px';
                }, 100);
            }

            // Input focus effects
            const inputs = document.querySelectorAll('.input, .textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', function () {
                    this.style.borderColor = '#0270D7';
                    this.style.boxShadow = '0 0 0 2px rgba(2, 112, 215, 0.2)';
                });

                input.addEventListener('blur', function () {
                    this.style.borderColor = '#242830';
                    this.style.boxShadow = 'none';
                });
            });
        });

    </script>

    <style>
        /* Contact Page Specific Styles */
        .contact-form {
            max-width: 800px;
            margin: 0 auto;
        }

        .input, .textarea {
            background: #2C3039 !important;
            border: 1px solid #242830 !important;
            color: #fff !important;
        }

        .input:focus, .textarea:focus {
            border-color: #0270D7 !important;
            box-shadow: 0 0 0 2px rgba(2, 112, 215, 0.2) !important;
            outline: none !important;
        }

        .input::placeholder, .textarea::placeholder {
            color: #8A94A7 !important;
        }

        /* Make sure form is clickable */
        .contact-form * {
            pointer-events: auto !important;
        }

        /* Loading animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Feature hover effects */
        .feature-inner {
            transition: all 0.3s ease;
            padding: 32px;
            border-radius: 8px;
        }

        .feature-inner:hover {
            background: rgba(36, 40, 48, 0.5);
            transform: translateY(-5px);
        }

        /* Responsive adjustments */
        @media (max-width: 640px) {
            .field-grouped {
                flex-direction: column;
            }

            .control:not(:last-child) {
                margin-bottom: 24px;
                margin-right: 0;
            }

            .feature-inner {
                padding: 24px;
            }
        }

        /* Ensure everything is clickable */
        button,
        input,
        textarea,
        .button {
            cursor: pointer !important;
            pointer-events: auto !important;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            cursor: text !important;
        }
    </style>


</x-layout>
