<button {{ $attributes->merge(['type' => 'submit', 'class' => 'book-btn ']) }}>
    {{ $slot }}
</button>
