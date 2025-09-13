<?php

use Spatie\Sitemap\Tags\Url;

return [
	Url::create('/')->setPriority(1.0),
	Url::create('/top-3-gelaterias')->setPriority(0.8),
	Url::create('/gelaterias-zurich-review')->setPriority(0.8),
	
];
