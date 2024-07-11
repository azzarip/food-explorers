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
        Schema::create('contact_meetup', function (Blueprint $table) {
            $table->foreignId('contact_id')->constrained()->onDelete('cascade');
            $table->foreignId('meetup_id')->constrained()->onDelete('cascade');
            // $table->boolean('confirmed')->default(false);
            // $table->boolean('checked-in')->default(false);
            $table->timestamps();
            $table->primary(['contact_id', 'meetup_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_meetup');
    }
};
