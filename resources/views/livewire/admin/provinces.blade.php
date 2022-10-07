@section('title', __('Provinces'))
<div>
    <div class="max-w-7xl mx-auto pt-6 px-2">
        <h1 class="text-3xl font-bold text-gray-600 mb-4">{{ __('Provinces') }}</h1>
        <div class="flex justify-between p-2 bg-white rounded-t shadow items-center">
            <div>
                <x-input wire:model.debounce.500ms="search" icon="search" placeholder="ID or Name" />
                {{-- <x-jet-input id="search" class="block mt-1 w-full" type="text" name="search" wire:model.debounce.500ms="search" placeholder="ID o Descripcion"/> --}}
            </div>
            <div>
                <div class="flex gap-2">
                 
                    <div>
                        <x-button dark label="Agregar" wire:click="createShowModal" />
                    </div>
                </div>
            </div>
        </div>

        {{-- table --}}
        <div>
            <div class="shadow-sm overflow-hidden my-8">
                <table class="border-collapse table-auto w-full text-sm">
                  <thead class="bg-gray-50">
                    <tr>
                        <th class="border-b font-medium p-4 text-gray-400 text-left">#</th>
                        <th class="border-b font-medium p-4 text-gray-400 text-left">{{ __('Name') }}</th>
                        <th class="border-b font-medium p-4 text-gray-400 text-left">{{ __('Slug') }}</th>
                        {{-- <th class="border-b font-medium p-4 text-gray-400 text-left">{{ __('Province') }}</th> --}}
                        <th class="border-b font-medium p-4 text-gray-400 text-left"></th>
                    </tr>
                  </thead>
                    <tbody class="bg-white">
                        @foreach ($provinces as $item)
                            <tr>
                                <td class="border-b border-gray-100 p-4 text-gray-500">{{ $item->id }}</td>
                                <td class="border-b border-gray-100 p-4 text-gray-900"> {{ $item->name }}</td>
                                <td class="border-b border-gray-100 p-4 text-gray-500">{{ $item->slug }}</td>
                                {{-- <td class="border-b border-gray-100 p-4 text-gray-500"></td> --}}
                                <td class="border-b border-gray-100 p-4 text-gray-500">
                                    <x-jet-button wire:click="updateShowModal({{ $item->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </x-jet-button>
                                    <x-jet-danger-button wire:click="deleteShowModal({{ $item->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </x-jet-button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
        </div> {{-- end table --}}

    </div>{{-- main div --}}

    {{-- Modal Form --}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Province') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                    wire:model.debounce.500ms="name" />
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="long" value="{{ __('Longitude') }}" />
                <x-jet-input id="long" class="block mt-1 w-full" type="text" name="long"
                    wire:model.debounce.500ms="long" />
                @error('long')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="lat" value="{{ __('Latitude') }}" />
                <x-jet-input id="lat" class="block mt-1 w-full" type="number" name="lat"
                    wire:model.debounce.500ms="lat" />
                @error('lat')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
                <textarea wire:model.debounce.500ms="description"  id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description..."></textarea>
                
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            @if ($modelId)
                <x-jet-button class="ml-3" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Update') }}
                </x-jet-button>
            @else
                <x-jet-button class="ml-3" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Create') }}
                </x-jet-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>

    {{-- Delete Modal --}}
    <x-jet-dialog-modal wire:model="modalConfirmDelete">
        <x-slot name="title">
            {{ __('Eliminar Categoría') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Estas seguro que deseas eliminar esta categoría.') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmDelete')" wire:loading.attr="disabled">
                {{ __('Cancelar') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Eliminar') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

</div>
