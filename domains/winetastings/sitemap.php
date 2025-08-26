<?php 

use Spatie\Sitemap\Tags\Url;

return [
    Url::create('/')->setPriority(priority: 1.0)->setChangeFrequency('monthly'),
    Url::create('/upcoming')->setPriority(priority: 1.0)->setChangeFrequency('daily'),
];