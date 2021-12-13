<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-block btn-lg btn-error']) }}>
    {{ $slot }}
</button>
