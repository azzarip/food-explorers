<?php

namespace Database\Seeders;

use App\Models\Wine\Date;
use App\Models\Wine\Event;
use App\Models\Wine\Tasting;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class WineTastingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // --- If you want to auto-resolve/create organizer & location, uncomment below ---
        // $organizerId = Organizer::query()->value('id')
        //     ?? Organizer::create(['name' => 'Wine Explorers'])->id;
        // $locationId = Location::query()->value('id')
        //     ?? Location::create(['name' => 'Default Location'])->id;

        // Hard-set to 1 as requested (ensure those records exist)
        $organizerId = 1;
        $locationId = 1;

        $startDay = Carbon::today('Europe/Zurich');

        // Common start times to pick from
        $possibleStarts = ['17:30:00', '18:00:00', '18:30:00', '19:00:00', '19:30:00'];

        for ($i = 1; $i <= 50; $i++) {
            $event = Tasting::create([
                'organizer_id' => $organizerId,
                'location_id' => $locationId,
                'title' => $faker->sentence(3), // e.g. "Barolo Vertical Night"
                'description' => $faker->paragraph(),
            ]);

            // 1–3 dates for each event
            $datesCount = random_int(1, 3);
            $usedKeys = []; // to prevent duplicate (date,start) within same event

            for ($d = 0; $d < $datesCount; $d++) {
                // Find a unique date+start combination for this event
                do {
                    $offsetDays = random_int(0, 30);
                    $date = $startDay->copy()->addDays($offsetDays)->toDateString();
                    $startTime = $possibleStarts[array_rand($possibleStarts)];
                    $key = $date.' '.$startTime;
                } while (isset($usedKeys[$key]));

                $usedKeys[$key] = true;

                // End time = +120 to +180 minutes
                $endTime = Carbon::parse($startTime)
                    ->addMinutes(random_int(120, 180))
                    ->format('H:i:s');

                Date::create([
                    'event_id' => $event->id,
                    'date' => $date,
                    'start_time' => $startTime,
                    'end_time' => $endTime,
                ]);
            }
        }
    }
}
