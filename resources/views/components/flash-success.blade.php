@if(session('message'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" class="bg-lime-500 text-white px-4 py-3 fixed top-0 right-0 left-0 z-50" role="alert">
        <div class="container mx-auto flex items-center justify-between">
            <p class="text-sm">{{ session('message') }}</p>
        </div>
    </div>
@endif
