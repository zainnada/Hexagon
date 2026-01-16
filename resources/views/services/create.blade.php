<x-layout title="{{__('services.create')}}">

    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="hero-title mt-0">{{ __('services.create') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-sm">
            <div class="section-inner">
                <form method="POST" action="/services" class="text-center">
                    @csrf

                    <div class="mb-16">
                        <input type="text"
                               name="service_name"
                               placeholder="{{ __('services.service_title') }}"
                               value="{{ old('service_name') }}"
                               required
                               class="input">
                        <x-error name="service_name"/>
                    </div>
                    <div class="mb-16">
                        <textarea type="text"
                               name="service_description"
                               placeholder="{{ __('services.service_description') }}"
                               required class="input">{{old('service_description')}}</textarea>
                        <x-error name="service_description"/>
                    </div>
                    <div class="mb-16">
                        <input type="number"
                               name="service_price"
                               placeholder="{{ __('services.service_price') }}"
                               value="{{ old('service_price') }}"
                               required
                               class="input">
                        <x-error name="service_price"/>
                    </div>

                    <button class="button button-primary button-wide-mobile">
                        {{ __('services.create') }}
                    </button>
                </form>
            </div>
        </div>
    </section>

</x-layout>
