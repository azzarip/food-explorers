<?php

namespace App\Filament\Resources\ContactsResource\Widgets;

use Azzarip\Teavel\Models\Contact;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ContactCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Contact::counts(),
        ];
    }
}
