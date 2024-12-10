<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 border border-transparent rounded-md text-white uppercase tracking-widest focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
