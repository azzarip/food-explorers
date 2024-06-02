<?php
namespace App\Console\Commands;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the XML Sitemap of pizzazero.ch';
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        $sitemap = Sitemap::create(config('domains.base'));
        $sitemap->add(Url::create("/")
                ->setPriority(1.0)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        /* Insert additional website */
        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}