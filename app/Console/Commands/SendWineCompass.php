<?php

namespace App\Console\Commands;

use App\Mail\WineCompass;
use App\Models\User;
use App\Models\Wine\Date;
use Azzarip\Teavel\Models\Tag;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Azzarip\Teavel\Notifications\TelegramNotification;

class SendWineCompass extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'winecompass:send {--dry-run : Do not send, just log}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send weekly events to the Wine Newsletter tagged people';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = Carbon::now()->copy()->startOfDay();    
        $end   = $start->copy()->addWeek();

        $dates = Date::query()
            ->where('date', '>=', $start->toDateString())
            ->where('date', '<=', $end->toDateString())
            ->orderBy('date')
            ->get();

        if ($dates->isEmpty()) {
            User::first()->notify(new TelegramNotification('No upcoming wine events found'));
            return self::SUCCESS;
        }

        $tag = Tag::name('Wine Newsletter');
        $contactsQuery = $tag->contacts()->whereNotNull('email');
        
        $dry = (bool) $this->option('dry-run');
        
        $contactsQuery->chunk(200, function ($contacts) use ($dates, $start, $end, $dry) {
            foreach ($contacts as $contact) {
                $mailable = new WineCompass(
                    events: $dates,                 
                    windowStart: $start,
                    windowEnd:   $end,
                    contact:     $contact
                );

                if ($dry) {
                    Log::info('[Wine Compass] (dry-run) would send to '.$contact->email);
                } else {
                    Mail::to($contact->email)->queue($mailable);
                }
            }
        });

        return self::SUCCESS;
    }
}
