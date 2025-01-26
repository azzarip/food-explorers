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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('class');
            $table->tinyInteger('type_id');
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->nullable();
            $table->foreignId('contact_id')->nullable();
            $table->foreignId('offer_id')->nullable();
            $table->string('title')->nullable();
            $table->foreignId('shipping_id')->nullable();
            $table->bigInteger('total')->unsigned()->default(0);
            $table->bigInteger('margin')->default(0);
            $table->timestamps();
        });

    }

};
