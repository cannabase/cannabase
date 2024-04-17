<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Club profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('update-club-information-form')

            <x-section-border />
            <div class="mt-10 sm:mt-0">
                <!-- IMAGE UPLOAD -->
            </div>

            <x-section-border />
            <div class="mt-10 sm:mt-0">
                @livewire('update-club-address-form')
            </div>

            <x-section-border />

            <div class="mt-10 sm:mt-0">
                <!-- DOWNLOAD AREA -->
            </div>

            <x-section-border />

            <div class="mt-10 sm:mt-0">
                <!-- DELETE CLUB -->
            </div>
        </div>
    </div>
</x-app-layout>
