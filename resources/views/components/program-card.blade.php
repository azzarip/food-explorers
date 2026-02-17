@props(['url', 'image', 'name', 'address'])
<a href="{{ $url }}" target="_blank" rel="noopener noreferrer" class="group block">
    <div class="w-full py-2 px-4 border rounded-lg group flex gap-1 items-center justify-around">
        <img src="{{ $image }}"
            alt="{{ $name }}"
            class="h-16 w-16 object-cover rounded-2xl shadow-xl border border-gray-100">
        <div>

            <p class="font-semibold group-hover:underline text-lg">{{ $name }}</p>
            <p class="text-slate-700">{{ $address }}</p>
        </div>
        <x-heroicon-o-arrow-right class="w-6 h-6 mb-1 text-slate-700" />
    </div>
</a>
