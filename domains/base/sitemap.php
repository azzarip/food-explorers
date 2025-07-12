<?php

use Spatie\Sitemap\Tags\Url;

return [
    Url::create('/')->setPriority(priority: 1.0),
    Url::create('/register')->setPriority(0.5),
    Url::create('/login')->setPriority(0.5),
  
    Url::create('/explore-malaysia')->setPriority(0.8),

    Url::create('/foodie-news')->setPriority(0.8),
    Url::create('/top-3-gelaterias-zurich')->setPriority(0.7),
    Url::create('/gelaterias-zurich-review')->setPriority(0.7),
];
