<x-form-section submit="updateClubInformation">
    <x-slot name="title">
        {{ __('Club Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your club\'s profile information.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Club Name') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model="email" />
            <x-input-error for="email" class="mt-2" />
        </div>

        <!-- website -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="website" value="{{ __('Website') }}" />
            <x-input id="website" type="text" class="mt-1 block w-full" wire:model="website" />
            <x-input-error for="website" class="mt-2" />
        </div>

        <!-- Status -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="status" value="{{ __('Status') }}" />
            <select id="status" class="border border-black text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="0">{{ __('Idea') }}</option>
                <option value="1">{{ __('Preparation') }}</option>
                <option value="2">{{ __('In Founding') }}</option>
                <option value="3">{{ __('Founded') }}</option>
                <option value="4">{{ __('Approved') }}</option>
            </select>
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
