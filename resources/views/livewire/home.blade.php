@section('title', __('Home'))
<div>
    <div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-2">
            <div class="py-10 flex justify-center">
                <div><img src="{{ asset('images/under-construction.png') }}" alt=""></div>
            </div>
            <div class="text-4xl text-center text-gray-600 font-medium">COMING SOON</div>
            {{-- <div class="py-5 bg-gray-50 my-5 rounded px-4">
                <div class="pb-6 text-center">
                    <div class="text-2xl md:text-3xl text-gray-700">
                        Reliable, low cost airport transfers
                    </div>
                    <div class="text-sm md:text-lg text-gray-500">
                        Book a private transfer or shared shuttle at over 500 airports, stations and ports worldwide
                    </div>
                </div>

                <div class="lg:grid lg:grid-cols-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 col-span-3 md:mr-0 lg:mr-2">
                        <div class="md:mr-2">
                            <x-select

                                placeholder="From - Pick up location"
                                wire:model.defer="model"
                            >
                                <x-select.option label="Pending" value="1" />
                                <x-select.option label="In Progress" value="2" />
                                <x-select.option label="Stuck" value="3" />
                                <x-select.option label="Done" value="4" />
                            </x-select>
                        </div>
        
                        <div class="mt-2 md:mt-0">
                            <x-select

                                placeholder="To - Drop off location"
                                wire:model.defer="model"
                            >
                                <x-select.option label="Pending" value="1" />
                                <x-select.option label="In Progress" value="2" />
                                <x-select.option label="Stuck" value="3" />
                                <x-select.option label="Done" value="4" />
                                <x-select.option label="Pending" value="1" />
                            </x-select>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 mt-2 lg:col-span-3 md:grid-cols-5 md:mt-2 lg:mt-0">
                        <div class="mr-2 md:col-span-2">
                            <x-datetime-picker

                                placeholder="Arrival Date"
                                wire:model.defer="normalPicker"
                            />
                        </div>
    
                        <div class="md:col-span-2 md:mr-2">
                            <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="w-full border shadow text-secondary-600 bg-white border-secondary-400 hover:bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md px-3 py-2 text-center inline-flex items-center justify-between" type="button">1 {{ __('Passengers') }} <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="hidden z-10 w-80 bg-white rounded divide-y divide-gray-100 shadow lg:w-48" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 335.5px, 0px);">
                                <div class="p-4">
                                    <div>
                                        <x-inputs.number label="Adults" value="1" />
                                    </div>
                                    <div class="mt-2">
                                        <x-inputs.number label="Children" value="1" />
                                    </div>
                                    <div class="mt-2">
                                        <x-inputs.number label="Infants" value="1" />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-span-2 mt-4 md:mt-0 md:col-span-1">
                            <button type="button" class="w-full text-white bg-blue-600 hover:bg-blue-700 border border-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2 inline-flex items-center justify-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>   
                                {{ __('Search') }}
                            </button>
                        </div>
                    </div>

                    
                </div>
            </div>
            
            <div class="p-4 mt-8 bg-blue-500">
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
            </div>

            <div class="mb-4">
                <div class="items-center lg:flex bg-green-50 rounded-lg justify-center">
                    <div class="flex justify-center sm:pt-4 lg:pt-0">
                        <img class="h-10" src="{{ asset('images/icons/shield-green.png') }}" alt="Shield">
                    </div>
                    <div class="text-center py-4 px-4 text-sm lg:text-lg text-green-600">
                        {{ __('For your safety and comfort, all our drivers and vehicles are following World Health Organization guidelines.') }}
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                <div class="py-10 bg-gray-50 rounded hover:shadow-lg focus:shadow-lg">
                    <div class="px-6">
                        <div class="flex justify-center py-2">
                            <div class="text-center"><img class="h-16" src="{{ asset('images/icons/plane.png') }}" alt="Airplane"></div>
                        </div>
                        <div class="text-xl text-center py-2 text-gray-700">{{ __('Airport Pickup/Drop Off') }}</div>
                        <div class="text-center text-gray-600">{{ __('Ardemti will pick you up, drop you off, or set up a round trip airport transfer.') }}</div>
                    </div>
                </div>
        
                <div class="py-10 bg-gray-50 rounded hover:shadow-lg focus:shadow-lg">
                    <div class="px-6">
                        <div class="flex justify-center py-2">
                            <div class="text-center"><img class="h-16" src="{{ asset('images/icons/route.png') }}" alt="Route"></div>
                        </div>
                        <div class="text-xl text-center py-2 text-gray-700">{{ __('From A to B') }}</div>
                        <div class="text-center text-gray-600">{{ __('Need to get from your hotel to the office? Ardemti will support all of your transportation needs.') }}</div>
                    </div>
                </div>
        
                <div class="py-10 bg-gray-50 rounded md:col-span-3 lg:col-span-1 hover:shadow-lg focus:shadow-lg">
                    <div class="px-6">
                        <div class="flex justify-center py-2">
                            <div class="text-center"><img class="h-16" src="{{ asset('images/icons/palmera.png') }}" alt="Palmera"></div>
                        </div>
                        <div class="text-xl text-center py-2 text-gray-700">{{ __('From Home to Beach') }}</div>
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
                
                <div class="flex justify-center mt-4">
                    <a href="#" class="text-white text-sm bg-[#4bae4f] hover:bg-[#4bae4f]/90 focus:ring-4 focus:outline-none focus:ring-[#4bae4f]/50 font-medium rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                        <img class="h-6 mr-2" src="{{ asset('images/icons/whatsapp-2.png') }}" alt="">
                        Chat Now
                    </a>
                </div>
            </div>   --}}
        </div>
    </div>

</div>
