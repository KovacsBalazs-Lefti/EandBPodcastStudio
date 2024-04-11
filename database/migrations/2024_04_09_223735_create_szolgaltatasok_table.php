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
        Schema::create('szolgaltatasok', function (Blueprint $table) {
            $table->bigInteger('szolgaltatasid');
            $table->string('szolgaltatasmegnevezes');
            $table->bigInteger('csomagid');
            $table->dateTime('foglalaskezdete');
            $table->dateTime('foglalasvege');
            $table->decimal('ar',10, 0);
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szolgaltatasoks');
    }
};
