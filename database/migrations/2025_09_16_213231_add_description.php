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
        Schema::create('wine_event_description', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->text('en')->nullable();
            $table->text('de')->nullable();
            $table->timestamps();
            
$table->foreign('event_id')
      ->references('id')
      ->on('wine_tastings')
      ->onDelete('cascade');

        });

        Schema::table('wine_tastings', function (Blueprint $table) {
            $table->boolean('is_dinner')->default(false)->after('title');
            $table->dropColumn('description');
        });

    }
};
