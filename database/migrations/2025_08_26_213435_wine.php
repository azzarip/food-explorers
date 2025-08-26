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
        Schema::create('wine_organizers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('website')->nullable();
            $table->timestamps();
        });

        Schema::create('wine_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')
                  ->constrained('locations')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();

            $table->foreignId('organizer_id')
                  ->constrained('wine_organizers')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();

            $table->string('title');
            $table->text('description')->nullable();

            $table->timestamps();

            $table->index(['location_id', 'organizer_id']);
        });

        Schema::create('wine_dates', function (Blueprint $table) {
            $table->id();

            $table->foreignId('event_id')
                  ->constrained('wine_events')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();

            $table->date('date');            
            $table->time('start_time');      
            $table->time('end_time')->nullable(); 

            $table->timestamps();

            $table->index(['date']);
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
