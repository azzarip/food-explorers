<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Azzarip\Teavel\Database\Factories\ContactFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Restaurant::factory(3)->create();
        ContactFactory::create(5);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
