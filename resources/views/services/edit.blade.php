<x-layout title="{{__('services.edit')}}">


    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="hero-title mt-0">{{ __('services.edit')}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-sm">
            <div class="section-inner">
                <form method="POST" action="/services/{{$service->id}}" class="text-center">
                    @csrf
                    @method('PATCH')

                    <div class="mb-16">
                        <input type="text"
                               name="service_name"
                               placeholder="{{ __('services.service_title') }}"
                               value="{{ $service->service_name }}"
                               required
                               class="input">
                        <x-error name="service_name"/>
                    </div>
                    <div class="mb-16">
                        <textarea type="text"
                                  name="service_description"
                                  placeholder="{{ __('services.service_description') }}"
                                  required class="input">{{$service->service_description}}</textarea>
                        <x-error name="service_description"/>
                    </div>
                    <div class="mb-16">
                        <input type="number"
                               name="service_price"
                               placeholder="{{ __('services.service_price') }}"
                               value="{{ $service->service_price }}"
                               required
                               class="input">
                        <x-error name="service_price"/>
                    </div>

                    <button class="button button-primary button-wide-mobile">
                        {{ __('services.edit') }}
                    </button>
                </form>
                <form method="POST" action="/services/{{$service->id}}" class="hidden">
                    @csrf
                    @method('DELETE')
                    <div class="flex items-center">
                        <button class="button button-sm button-danger">
                            {{__('services.delete')}}
                        </button>
                    </div>
                </form>
                <style>
                    .button-danger {
                        background-color: #ef0f23; /* A standard "danger" red */
                        color: white;
                        border: none;
                    }

                    .button-danger:hover {
                        background-color: #bb2d3b; /* A slightly darker red for hover */
                    }
                </style>

            </div>
        </div>
    </section>


</x-layout>
