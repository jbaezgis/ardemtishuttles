@section('title', __('Home'))
<div>
    <div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- <div class="p-4 mt-8 bg-blue-500">
                <div>
                    <h1 class="text-xl text-white">{{ __('PRIVATE TRANSFER SERVICES') }}</h1>
                </div>
                <div class="text-3xl font-bold text-white">
                    {{ __('CERTIFIED EXCELLENT!') }}
                </div>
                <div>
                    <div class="text-5xl text-yellow-300 font-extrabold">20 {{ __('YEARS') }}</div>
                    <div class="text-white">{{ __('serving tourist, 100% price guarantee') }}</div>
                </div>
            </div>
    
            <div class="text-center px-4 py-6 text-lg font-semibold text-gray-700">
                {{ __('Ardemti has been serving the tourist industry in the Dominican Republic since 2010. We are proud of our exceptional safety record and our highly acclaimed services.') }}
            </div> --}}

            {{-- WhatsApp booking --}}
            <div class="py-10 bg-green-100 rounded mb-4">
                <div class="flex justify-center"><img class="h-12" src="{{ asset('images/icons/whatsapp.png') }}" alt=""></div>
                    <div class="text-center py-4">
                        {{ __('Save rides') }}
                    </div>
                    <div class="text-gray-500 text-sm text-center">
                        Texto de prueba
                    </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                <div class="py-10 bg-gray-50 rounded hover:shadow-lg focus:shadow-lg">
                    <div class="px-6">
                        <div class="flex justify-center py-2">
                            <div class="text-center"><img class="h-16" src="{{ asset('images/icons/plane.png') }}" alt="Airplane"></div>
                        </div>
                        <div class="text-xl font-bold text-center py-2 text-gray-600">{{ __('Airport Pickup/Drop Off') }}</div>
                        <div class="text-center text-gray-600">{{ __('Ardemti will pick you up, drop you off, or set up a round trip airport transfer.') }}</div>
                    </div>
                </div>
        
                <div class="py-10 bg-gray-50 rounded hover:shadow-lg focus:shadow-lg">
                    <div class="px-6">
                        <div class="flex justify-center py-2">
                            <div class="text-center"><img class="h-16" src="{{ asset('images/icons/route.png') }}" alt="Route"></div>
                        </div>
                        <div class="text-xl font-bold text-center py-2 text-gray-600">{{ __('From A to B') }}</div>
                        <div class="text-center text-gray-600">{{ __('Need to get from your hotel to the office? Ardemti will support all of your transportation needs.') }}</div>
                    </div>
                </div>
        
                <div class="py-10 bg-gray-50 rounded md:col-span-3 lg:col-span-1 hover:shadow-lg focus:shadow-lg">
                    <div class="px-6">
                        <div class="flex justify-center py-2">
                            <div class="text-center"><img class="h-16" src="{{ asset('images/icons/palmera.png') }}" alt="Palmera"></div>
                        </div>
                        <div class="text-xl font-bold text-center py-2 text-gray-600">{{ __('From Home to Beach') }}</div>
                        <div class="text-center text-gray-600">{{ __('Need to escape the city? Ardemti offers transportation within the city and to your get away locations.') }}</div>
                    </div>
                </div>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 py-10 gap-y-10 border-t border-b mt-6">
                <div>
                    <div class="flex justify-center"><img class="h-12" src="{{ asset('images/icons/best-price.png') }}" alt=""></div>
                    <div class="text-center py-4">
                        {{ __('We guarantee the best price') }}
                    </div>
                    <div class="text-gray-500 text-sm text-center">
                        Texto de prueba
                    </div>
                </div>
                <div>
                    <div class="flex justify-center"><img class="h-12" src="{{ asset('images/icons/clock.png') }}" alt=""></div>
                    <div class="text-center py-4">
                        {{ __('Free waiting time') }}
                    </div>
                    <div class="text-gray-500 text-sm text-center">
                        Texto de prueba
                    </div>
                </div>
                <div>
                    <div class="flex justify-center"><img class="h-12" src="{{ asset('images/icons/dollar-symbol.png') }}" alt=""></div>
                    <div class="text-center py-4">
                        {{ __('No hidden costs') }}
                    </div>
                    <div class="text-gray-500 text-sm text-center">
                        Texto de prueba
                    </div>
                </div>
                <div>
                    <div class="flex justify-center"><img class="h-12" src="{{ asset('images/icons/shield.png') }}" alt=""></div>
                    <div class="text-center py-4">
                        {{ __('Save rides') }}
                    </div>
                    <div class="text-gray-500 text-sm text-center">
                        Texto de prueba
                    </div>
                </div>
            </div>


            

            <div class="py-10">
                <div class="flex justify-center">
                    <img class="h-12" src="{{ asset('images/icons/ask.png') }}" alt="">
                </div>
                <div class="text-center py-4 text-2xl">
                    {{ __('Need help') }}
                </div>
                <div class="text-gray-500 text-center">
                    {{ __('If you need any help you can contact us through our WhatsApp channel.') }}
                </div>
                <div class="text-center py-4">
                    +1 (849) 656-6119
                </div>

                <div class="flex justify-center">
                    <x-button outline secondary label="Click Here" />
                </div>
            </div>
           
        </div>
    </div>

</div>
