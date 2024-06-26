<li @if($disabled) data-tooltip-target="tooltip-default-{{$route}}" data-tooltip-placement="bottom" @endif class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-lime-500 shadow-2xl @if(Route::is($route)){{ '!bg-gray-600' }}@endif @if($disabled) {{ '!bg-gray-400' }} @endif ">
    <a class="block text-white hover:text-white truncate transition duration-150" @if(!$disabled) href="{{ route($route) }}" @endif >
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <i class="bi bi-{{$icon}}"></i>
                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $slot }}</span>
            </div>
        </div>
    </a>
</li>

@if($disabled)
<div id="tooltip-default-{{$route}}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
    Coming soon
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>
@endif
