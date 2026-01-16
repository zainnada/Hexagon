<x-layout title="{{ __('auth.register') }}">

    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="hero-title mt-0">{{ __('auth.register') }}</h1>
                    <p class="hero-paragraph">{{ __('auth.register_description') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container-sm">
            <div class="section-inner">

                <form method="POST" action="/register" class="text-center">
                    @csrf

                    <div class="mb-16">
                        <input type="text"
                               name="name"
                               placeholder="{{ __('auth.name') }}"
                               value="{{ old('name') }}"
                               required
                               class="input">
                        <x-error name="name"/>
                    </div>


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
                        <input type="password"
                               name="password_confirmation"
                               placeholder="{{ __('auth.password_confirmation') }}"
                               required
                               class="input">
                        <x-error name="password_confirmation"/>
                    </div>

                    <button class="button button-primary button-wide-mobile">
                        {{ __('auth.register') }}
                    </button>

                    <p class="text-sm mt-16">
                        {{ __('auth.have_account') }}
                        <a href="{{ route('login') }}">{{ __('auth.login') }}</a>
                    </p>

                </form>

            </div>
        </div>
    </section>

</x-layout>

