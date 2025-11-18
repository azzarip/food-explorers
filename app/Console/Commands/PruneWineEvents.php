<?php

namespace App\Console\Commands;

use App\Models\Wine\Date;
use App\Models\Wine\Tasting;
use Illuminate\Console\Command;

class PruneWineEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wine-events:prune';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete event dates and events older than 7 days';

    public function handle()
    {
        $threshold = today()->subDays(7); 

        $deletedDates = Date::where('date', '<', $threshold)->delete();

        $deletedEvents = Tasting::whereDoesntHave('dates', function ($q) use ($threshold) {
            $q->where('date', '>=', $threshold);
        })->delete();

        $this->info("Deleted {$deletedDates} dates and {$deletedEvents} events.");

        return Command::SUCCESS;
    }

}
