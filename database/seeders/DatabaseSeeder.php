<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Azzarip\Teavel\Database\Factories\ContactFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Location::factory(3)->create();

        $c = Contact::create([
            'first_name' => 'Paco',
           // 'last_name' => 'Ricci',
            'email' => 'paco@ricci.it',
            'password' => bcrypt('pacoricci'),
        ]);

       Event::factory(10)->create();

       foreach (Event::all() as $event) {
           $event->contacts()->sync([$c->id]);
       }
    }
}
