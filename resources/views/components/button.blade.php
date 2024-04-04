<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-lime-500 hover:bg-lime-600 text-white whitespace-nowrap']) }}>
    {{ $slot }}
</button>
