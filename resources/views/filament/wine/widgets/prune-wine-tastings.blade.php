<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex flex-col items-center justify-between gap-4">
            <h2 class="text-2xl text-center mb-4 font-semibold text-gray-950 dark:text-white">
                🍷 Wine Tasting Cleanup
            </h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 text-center mb-4">
                This will delete old wine tasting dates and any associated tastings that are no longer current (older
                than 7 days).
            </p>
            <div class="mx-auto">
                {{ $this->runCleanupAction() }}
            </div>

        </div>
        <x-filament-actions::modals />

    </x-filament::section>
</x-filament-widgets::widget>
