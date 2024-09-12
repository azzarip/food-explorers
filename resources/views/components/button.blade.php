<button  {{ $attributes->merge(['class' => 'big-button form-button']) }}>
    {{ $slot }} <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
</button>
