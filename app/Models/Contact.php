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

    public function participatedEvents()
    {
        return $this->belongsToMany(Event::class)
            ->wherePivotNull('deleted_at')
            ->wherePivotNull('queue')
            ->withTimestamps();
    }

    public function lastEvent()
    {
        return $this->belongsToMany(Event::class)
        ->where('scheduled_at', '<=', now()->startOfDay())
        ->wherePivotNull('deleted_at')
        ->orderBy('scheduled_at', 'desc')
        ->limit(1);
    }

    public function getNextEvent()
    {
        return $this->belongsToMany(Event::class)
        ->where('scheduled_at', '>=', now()->startOfDay())
        ->wherePivotNull('deleted_at')
        ->orderBy('scheduled_at', 'asc')
        ->first();
    }

    public function getPoints()
    {
        return $this->participatedEvents()->count();
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

    public function getDisplayNameAttribute() {
        return $this->first_name;
    }

}
