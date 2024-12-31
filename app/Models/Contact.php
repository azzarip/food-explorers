<?php

namespace App\Models;

use App\HasLocale;
use App\Models\Event;
use Azzarip\Teavel\Models\Tag;
use Azzarip\Teavel\Models\TagCategory;
use Azzarip\Teavel\Models\Contact as BaseContact;
use Illuminate\Contracts\Translation\HasLocalePreference;

class Contact extends BaseContact implements HasLocalePreference
{
    use HasLocale;

    protected $guarded = [];

    public function events()
    {
        return $this->belongsToMany(Event::class)->withTimestamps();
    }

    public function lastEvent()
    {
        return $this->belongsToMany(Event::class)
        ->where('scheduled_at', '<=', now()->startOfDay())
        ->orderBy('scheduled_at', 'desc')
        ->limit(1);
    }

    public function getNextEvent()
    {
        return $this->belongsToMany(Event::class)
        ->where('scheduled_at', '>=', now()->startOfDay())
        ->orderBy('scheduled_at', 'asc')
        ->first();
    }

    public function getPoints()
    {
        return $this->events()->count();
    }

    public function getAchievements(): array
    {
        $cat = TagCategory::name('Achievements');
        $tags = $this->tags()
            ->where('category_id', $cat->id)
            ->pluck('name')
            ->toArray();
        return $tags;
    }

}
