<x-layout title="{{ __('auth.login') }}">

    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="hero-title mt-0">{{ __('auth.login') }}</h1>
                    <p class="hero-paragraph">{{ __('auth.login_description') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container-sm">
            <div class="section-inner">

                <form method="POST" action="{{ route('login') }}" class="text-center">
                    @csrf

                    <div class="mb-16">
                        <input type="email"
                               name="email"
                               placeholder="{{ __('auth.email') }}"
                               value="{{ old('email') }}"
                               required
                               class="input">
                        <x-error name="email"/>
                    </div>

                    <div class="mb-16">
                        <input type="password"
                               name="password"
                               placeholder="{{ __('auth.password') }}"
                               required
                               class="input">
                        <x-error name="password"/>
                    </div>

                    <div class="mb-24">
                        <button class="button button-primary button-wide-mobile">
                            {{ __('auth.login') }}
                        </button>
                    </div>

                    <p class="text-sm">
                        {{ __('auth.no_account') }}
                        <a href="{{ route('register') }}">{{ __('auth.register') }}</a>
                    </p>
                </form>

            </div>
        </div>
    </section>

</x-layout>
