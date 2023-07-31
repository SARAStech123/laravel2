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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('FName');
            $table->string('LName');
            $table->string('Class');
            $table->string('Email');
            $table->string('Password');
            $table->string('roll')->default('5');
            $table->string('SName');
            $table->string('SEmail');
            $table->string('SPassword');
            $table->string('roll2')->default('3');
            $table->string('approved')->default('wait for approval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
