@props(['link' => null])


<{{ $link ? 'a href='.$link : 'button' }} 
    {{ $attributes->merge(['class' => 'std-button px-2 py-4 mb-2 mt-4']) }}>
    <div class="px-2">
        {{ $slot }} 
        <span class="float-right mr-4">
            <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
        </span>
    </div>
{!! $link ? "</a>" : "</button>" !!}