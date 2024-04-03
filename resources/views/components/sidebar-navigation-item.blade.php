<li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-slate-900">
    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(Route::is('dashboard')){{ '!text-indigo-500' }}@endif" href="{{ route('dashboard') }}">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <!-- ICON --><span></span>
                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $slot }}</span>
            </div>
        </div>
    </a>
</li>
