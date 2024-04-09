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
        Schema::create('foglalas', function (Blueprint $table) {
            $table->bigIncrements('foglalasid');
            $table->unsignedBigInteger('felhasznaloid');
            $table->foreign('felhasznaloid')->references('felhasznaloid')->on('users');
            $table->dateTime('foglalaskezdete');
            $table->dateTime('foglalasvege');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foglalas');
    }
};
