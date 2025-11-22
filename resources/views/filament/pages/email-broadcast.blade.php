<x-filament-panels::page>
   <form wire:submit="send">
        {{ $this->form }}
        
        <button type="submit" class="mt-4 border-sky-600 bg-sky-600 rounded text-center text-xl">
            Send
        </button>
    </form>
</x-filament-panels::page>
