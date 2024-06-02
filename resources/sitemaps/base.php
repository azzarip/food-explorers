<?php

use Spatie\Sitemap\Tags\Url;

return [
    Url::create("/")
        ->setPriority(1.0)
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY),
];
