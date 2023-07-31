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
        Schema::create('admin_homes', function (Blueprint $table) {
            $table->id();
            $table->string('Heading');
            $table->string('text');
            $table->string('slide1');
            $table->string('slide2');
            $table->string('slide3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_homes');
    }
};
