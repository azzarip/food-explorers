<?php

namespace App\Wine;

use Carbon\CarbonInterface;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use App\Models\Wine\Date as WineDate;

class Loader
{
    protected string $tz = 'Europe/Zurich';
    protected ?string $locale = 'en';
    protected string $todayWord = 'Today';
    protected string $tomorrowWord = 'Tomorrow'; 

    protected Collection $days;

    public function __construct(
        public CarbonInterface $start,
        public CarbonInterface $end,
    ) {

    }
    public function load()
    {
        $rows = WineDate::query()
            ->with(['tasting'])                 
            ->where('date', '>=', $this->start->toDateString())
            ->where('date', '<=',  $this->end->toDateString())
            ->orderBy('date')
            ->orderBy('start_time')
            ->limit(100)
            ->get();

        $this->days = $this->toDays($rows);
        return $this;
    }

    /**
     * Convenience: next 7 days from "now" in tz.
     */
    public static function nextMonth()
    {
        return self::nextDays(30);
    }

    public static function nextWeek()
    {
        return self::nextDays(7);    
    }

    public static function nextDays(int $days)
    {
        $start = now();
        $end = now()->addDays($days);
        $loader = new self($start, $end);
        return $loader->load();
    }

    public function getDays(): Collection
    {
        return $this->days;
    }
    protected function toDays(Collection $dates): Collection
    {
        $today    = now($this->tz)->startOfDay();
        $tomorrow = $today->copy()->addDay();

        return $dates
            ->groupBy(fn ($d) => $d->date->toDateString())
            ->sortKeys()
            ->map(function (Collection $items, string $dateStr) use ($today, $tomorrow) {
                $d = Carbon::parse($dateStr, $this->tz)->startOfDay();

                $label = $d->isSameDay($today)
                    ? "{$this->todayWord}, " . $d->format('j F')
                    : ($d->isSameDay($tomorrow)
                        ? "{$this->tomorrowWord}, " . $d->format('j F')
                        : ($this->locale ? $d->translatedFormat('j F Y, l') : $d->format('j F Y, l')));

                return new Day(
                    date: $d,
                    label: $label,
                    items: $items->values()
                );
            })
            ->values();
    }
}
