<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('meetups', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('restaurant_id');
            $table->timestamp('scheduled_at');
            $table->tinyInteger('max_participants')->unsigned();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meetups');
    }
};
