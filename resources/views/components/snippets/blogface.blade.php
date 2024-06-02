<div class="pt-2 flex items-center font-serif text-sm pl-30 text-slate-700 ">
    <img src="{{ asset('storage/images/azzari_circle_small.webp') }}" alt="Marco Azzari" class="w-12 h-12">
    <div class="w-32 text-right">
        <p class="font-semibold">Marco Azzari <x-heroicon-s-check-badge class="inline w-4 h-4 mb-1 mr-1 text-blue-700" /> </p>
        <time datetime="{{ $date }}" class="pb-1"> {{ $date->translatedformat('j. F Y') }}</time>
    </div>
 </div>