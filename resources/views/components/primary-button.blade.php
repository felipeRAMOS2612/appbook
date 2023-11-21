<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-center inline-flex items-center px-4 py-2 bg-[var(--primary-color)] rounded-md text-white']) }}>
    {{ $slot }}
</button>
