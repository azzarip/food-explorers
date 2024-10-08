<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
       Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique()->index();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->index()->nullable();
            $table->string('phone')->unique()->index()->nullable();
            $table->string('meetup_id')->unique()->nullable();
            $table->string('password')->nullable();
            $table->timestamp('privacy_at')->nullable();
            $table->timestamp('marketing_at')->nullable();
            $table->boolean('opt_in')->default(false);
            $table->foreignId('referrer_id')->nullable();
            $table->boolean('is_female')->nullable();
            $table->date('birthday')->nullable();
            $table->foreignId('shipping_id')->nullable();
            $table->foreignId('billing_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

        public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
