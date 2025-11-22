<?php

namespace App\Console\Commands;

use App\Mail\WineCompass;
use App\Wine\Loader;
use Azzarip\Teavel\Models\Tag;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
        $dry = (bool) $this->option('dry-run');
        
        $loader = Loader::nextWeek();

        if($loader->hasNoEvents()) {
            if ($dry) {
                Log::info('[Wine Compass] (dry-run) No Events found');
            } 
            return self::SUCCESS;
        }

        $tag = Tag::name('Wine Newsletter');
        $contactsQuery = $tag->contacts()->whereNotNull('email');



        $contactsQuery->chunk(200, function ($contacts) use ($loader, $dry) {
            foreach ($contacts as $contact) {
                $mailable = new WineCompass(
                    loader: $loader,
                    contact: $contact
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
