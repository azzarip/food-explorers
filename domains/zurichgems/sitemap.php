<?php

use Spatie\Sitemap\Tags\Url;

return [
    Url::create('/')->setPriority(1.0),
    Url::create('/gelato')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY),
    Url::create('/gelato/reviews')->setPriority(0.6)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY),
    Url::create('/cocktail-bars')->setPriority(0.6)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY),

];
