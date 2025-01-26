@props(['link' => null])


<{{ $link ? 'a href='.$link : 'button' }} 
    {{ $attributes->merge(['class' => 'std-button text-center px-2 py-4 my-4']) }}>
    <div class="flex justify-between px-2">
        <span class="w-full text-center">{{ $slot }}</span>
        <span class="my-auto mr-4">
            <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
        </span>
    </div>
{!! $link ? "</a>" : "</button>" !!}