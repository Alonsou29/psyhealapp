@props(['submit'])

<div {{ $attributes->merge(['class' => 'flex items-center justify-center']) }}>
    <div class="mt-5 md:mt-0 md:col-span-2 w-full max-w-3xl">
        <form wire:submit="{{ $submit }}">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md">
                <div class="grid grid-cols-6 gap-6 flex items-center justify-center">
                    {{ $form }} <!-- $slot aquí representa el contenido del formulario -->
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-end sm:px-6 shadow sm:rounded-b-md">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
