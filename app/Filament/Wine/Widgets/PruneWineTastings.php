<?php

namespace App\Filament\Wine\Widgets;

use Filament\Actions\Action;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Artisan;
use Filament\Notifications\Notification;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Forms\Contracts\HasForms;

class PruneWineTastings extends Widget implements HasActions, HasForms
{
    use InteractsWithActions;
    use InteractsWithForms;

    protected string $view = 'filament.wine.widgets.prune-wine-tastings';

        public function runCleanupAction(): Action
    {
        return Action::make('runCleanup')
            ->label('Clean old events')
            ->color('danger')
            ->icon('heroicon-m-trash')
            ->requiresConfirmation()
            ->modalHeading('Clean old events & dates?')
            ->modalDescription(
                'This will delete all dates older than 7 days and any tastings that no longer have upcoming dates. This cannot be undone.'
            )
            ->modalSubmitActionLabel('Yes, clean now')
            ->action(function () {
                Artisan::call('wine-events:prune');

                $output = trim(Artisan::output());

                Notification::make()
                    ->title('Events cleanup completed')
                    ->body($output !== '' ? $output : 'Old events and dates have been cleaned.')
                    ->success()
                    ->send();
            });
    }

}
