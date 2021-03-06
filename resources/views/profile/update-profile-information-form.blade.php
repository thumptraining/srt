<x-form-section submit="updateProfileInformation">
   

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="mb-5">
               
                <div class="avatar flex justify-center items-center">
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden"
                    wire:model="photo"
                    x-ref="photo"
                    x-on:change="
                    photoName = $refs.photo.files[0].name;
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        photoPreview = e.target.result;
                    };
                    reader.readAsDataURL($refs.photo.files[0]);" 
                    />
                    <!-- Current Profile Photo -->
                    <div class="mb-8 rounded-full w-36 h-36" x-show="! photoPreview">
                        <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="mb-8 rounded-full w-36 h-36">
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div class="mb-8 rounded-full w-36 h-36" x-show="photoPreview">
                        <span class="block rounded-full w-36 h-36 bg-cover bg-no-repeat bg-center"
                            x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>
                </div>
                
                <x-secondary-button class="btn btn-block" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Selecionar foto') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-secondary-button type="button" class="btn btn-block mt-5 " wire:click="deleteProfilePhoto">
                        {{ __('Borrar foto') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Nombre') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions" >
        <div class="container px-5 mt-5">
            <x-action-message class="mr-3" on="saved">
                {{ __('Guardado') }}
            </x-action-message>
    
            <x-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Guardar') }}
            </x-button>
        </div>
        
    </x-slot>

    

</x-form-section>
