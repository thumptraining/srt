@props(['submit'])

<div {{ $attributes->merge(['class' => 'container']) }}>
   

    <div class="w-full">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="px-4 py-5 bg-white sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
