<?php

namespace App\Providers\Filament;

use Azzarip\Utilities\Filament\Items\BackMain;
use Azzarip\Utilities\Http\Middleware\AdminConfig;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class OfferPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('offer')
            ->path('offer')
            ->domain(config('domains.admin.url'))
            ->authGuard('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Offer/Resources'), for: 'App\\Filament\\Offer\\Resources')
            ->discoverPages(in: app_path('Filament/Offer/Pages'), for: 'App\\Filament\\Offer\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->navigationItems([
                BackMain::make(),
            ])
            ->discoverWidgets(in: app_path('Filament/Offer/Widgets'), for: 'App\\Filament\\Offer\\Widgets')
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
                AdminConfig::class
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
