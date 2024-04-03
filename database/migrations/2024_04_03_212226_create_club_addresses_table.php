<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('club_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('official_name')->nullable();
            $table->string('street')->nullable();
            $table->string('housenumber')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->foreignId('club_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('club_addresses');
    }
};
