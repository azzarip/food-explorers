<x-filament-panels::page>

<div class="w-full">
    <div class="flex items-center justify-between py-4 border-y">
        <div class="w-3/4">
            <p>Test Server API Connection</p>
        </div>
        <div class="w-1/4 text-right">
            {{ $this->pingServer }}
        </div>
    </div>
</div>

</x-filament-panels::page>
