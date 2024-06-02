@props(['href' => '#', 'onclick' => null, 'newPage' => false, 'class' => null])
<div class="{{ $class }} cursor-pointer">
<a 
    @if(empty($onclick))
        href="{{ $href }}" @if($newPage) taget="_blank" @endif
    @else
        onClick="scrollToSection('{{ $onclick }}')"
    @endif
class="btn-b"> <span class="ml-1"> {{ $slot }}</span>
<span><x-heroicon-s-arrow-right class="inline w-10 h-7" /></span>
</a>
</div>
