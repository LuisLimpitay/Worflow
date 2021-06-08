<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Informacion Personal') }}
    </x-slot>

    <x-slot name="description">
        {{ __('En esta seccion podras actualizar tus datos personales') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Foto') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                        class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                        x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Seleccionar nueva foto') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Eliminar Foto') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- NOMBRE -->
        <div class="col-span-6 sm:col-span-3">
            <x-jet-label for="name" />Nombre/s
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name"
                autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- APELLIDO -->
        <div class="col-span-6 md: sm:col-span-3">
            <x-jet-label for="last_name" />Apellido/s
            <x-jet-input id="last_name" type="text" class="mt-1 block w-full" wire:model.defer="state.last_name"
                autocomplete="last_name" />
            <x-jet-input-error for="last_name" class="mt-2" />
        </div>
        <!-- Vencimiento Licencias -->
        <div class="col-span-6 md: sm:col-span-3">
            <x-jet-label for="expire_license" />Vencimiento Licencia de Conducir
            <x-jet-input id="expire_license" type="date" min="2021-05-11" readonly class="mt-1 block w-full"
                wire:model.defer="state.expire_license" />
            <x-jet-input-error for="expire_license" class="mt-2" />
        </div>

        <!-- APELLIDO -->
        <div class="col-span-6 md: sm:col-span-3">
            <x-jet-label for="phone" /> Telefono celular
            <x-jet-input id="phone" type="text" class="mt-1 block w-full" readonly wire:model.defer="state.phone"
                autocomplete="phone" />
            <x-jet-input-error for="phone" class="mt-2" />
        </div>


        <!-- EMAIL -->
        <div class="col-span-6 md: sm:col-span-3">
            <x-jet-label for="email" />Email
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Guardado.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
