<?php

use Azzarip\Teavel\Models\Tag;
use Azzarip\Teavel\Models\TagCategory;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $cat = TagCategory::create([
            'name' => 'Achievements',
        ]);

        Tag::create([
            'name' => 'Napule Pizza Tasting',
            'category_id' => $cat->id,
        ]);

        Tag::create([
            'name' => '1001 Nights',
            'category_id' => $cat->id,
        ]);
        Tag::create([
            'name' => 'Yu-An Omakase',
            'category_id' => $cat->id,
        ]);
        Tag::create([
            'name' => 'Milano Meraviglia',
            'category_id' => $cat->id,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
