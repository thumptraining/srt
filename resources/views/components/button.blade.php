<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-block btn-lg btn-primary ']) }}>
    {{ $slot }}
</button>
