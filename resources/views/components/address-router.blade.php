<div>
    @if ($showForm)
    <div class="w-full mx-auto mb-20 px-2 max-w-xl">
        <x-forms.address :billing="$billing" :shipping="$shipping" :mode="$mode" />    
    </div>
    @else 
        @livewire('address-manager')
    @endif
</div>