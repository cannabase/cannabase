<x-form-section submit="updateClubAddress">
    <x-slot name="title">
        {{ __('Club Address') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your club\'s address information.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="official_name" value="{{ __('Official Club Name') }}" />
            <x-input id="official_name" type="text" class="mt-1 block w-full" wire:model="official_name" />
            <x-input-error for="official_name" class="mt-2" />
        </div>

        <!-- Street -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="street" value="{{ __('Street') }}" />
            <x-input id="street" type="text" class="mt-1 block w-full" wire:model="street" />
            <x-input-error for="street" class="mt-2" />
        </div>

        <!-- Housenumber -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="housenumber" value="{{ __('Housenumber') }}" />
            <x-input id="housenumber" type="text" class="mt-1 block w-full" wire:model="housenumber" />
            <x-input-error for="housenumber" class="mt-2" />
        </div>

        <!-- City -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="city" value="{{ __('City') }}" />
            <x-input id="city" type="text" class="mt-1 block w-full" wire:model="city" />
            <x-input-error for="city" class="mt-2" />
        </div>

        <!-- ZIP -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="zip" value="{{ __('ZIP') }}" />
            <x-input id="zip" type="text" class="mt-1 block w-full" wire:model="zip" />
            <x-input-error for="zip" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
