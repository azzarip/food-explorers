<?php

use Spatie\Sitemap\Tags\Url;

return [
    Url::create('/')->setPriority(1.0),
    Url::create('/register')->setPriority(0.5),
    Url::create('/login')->setPriority(0.5),
  
    Url::create('/explore-malaysia')->setPriority(0.8),
];
