<?php

namespace App\Filament\Pages;

use App\AzzariApi;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Http\Client\RequestException;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static string $view = 'filament.pages.settings';

    protected static ?int $navigationSort = 9999;

    public function pingServer(): Action
    {
        return Action::make('pingServer')
            ->label('Test')
            ->color('success')
            ->action(function () {
                try{
                    $response = AzzariApi::test();
                    Notification::make()
                        ->title('Connected.')
                        ->success()->send();
                } catch (RequestException $e) {
                    $error = json_decode($e->response->getBody()->getContents(), true);
                    if (array_key_exists('message', $error)) {
                        $message = $error['message'];
                    }
                    Notification::make()
                        ->title("Error {$e->response->getStatusCode()}")
                        ->body($message ?? 'No message available')
                        ->danger()->send();
                }
            });
    }
}
