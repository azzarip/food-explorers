<?php

namespace App\Providers\Filament;

use Azzarip\Utilities\Http\Middleware\AdminConfig;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class WinePanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('wine')
            ->path('wine')
            ->domain(config('domains.admin.url'))
            ->authGuard('admin')
            ->brandName('Zurich Wine Compass')
            ->login()
            ->colors([
                'primary' => Color::Red,
            ])
            ->discoverResources(in: app_path('Filament/Wine/Resources'), for: 'App\Filament\Wine\Resources')
            ->discoverPages(in: app_path('Filament/Wine/Pages'), for: 'App\Filament\Wine\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Wine/Widgets'), for: 'App\Filament\Wine\Widgets')
            ->widgets([
                \App\Filament\Wine\Widgets\CountCompass::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                AdminConfig::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
