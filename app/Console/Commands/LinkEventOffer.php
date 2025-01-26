<?php

namespace App\Console\Commands;

use App\Models\Event;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Console\PromptsForMissingInput;

class LinkEventOffer extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    

    protected $signature = 'link:event {slug} {eventId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command that links an event id with an offer slug';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $slug = $this->argument('slug');

        if($this->isBadSlug($slug)) {
            $this->fail('Wrong Slug format. Please retry.');
        }

        $eventId = $this->argument('eventId');

        if($this->isNotInt($eventId)) {
            $this->fail('Wrong Event Id format. Please retry.');
        }
        
        $eventId = (int) $eventId;
        $event = Event::find($eventId);
        
        $this->validateEvent($event);

        $cacheDuration = abs($event->scheduled_at->diffInSeconds(now())) + 86400;

        Cache::put("event:{$slug}", $eventId, $cacheDuration);

        $this->info("Link Succesful");
        $this->line("Offer Page '{$slug}' with Event:");
        $this->line('Title: ' . $event->title);
        $this->line('Date: ' . $event->scheduled_at->format('d/m/Y H:i')); 
        $this->line('');
        
        return self::SUCCESS;

    }

    protected function promptForMissingArgumentsUsing()
    {
        return [
            'slug' => 'Please provide the offer slug',
            'eventId' => 'Please provide the Event Id',
        ];
    }

    protected function isBadSlug($input_string): bool {
        return (bool) strpos($input_string, ' ');
    }

    protected function isNotInt($input_string): bool {
        $results =  is_numeric($input_string) && (int)$input_string == $input_string;
        return ! $results;
    }

    protected function validateEvent($event) {
        if(empty($event)) {
            $this->fail('Event does not exist. Please retry.');
        }

        if($event->scheduled_at->isPast()) {
            $this->fail('Event is in the past. Please retry.');
        }
    }
}
