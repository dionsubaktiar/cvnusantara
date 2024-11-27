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
        Schema::create('data', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->date('tanggal'); // Column for 'tanggal'
            $table->string('nopol'); // Column for 'nopol'
            $table->string('origin'); // Column for 'origin'
            $table->string('destinasi'); // Column for 'destinasi'
            $table->integer('uj'); // Column for 'uj'
            $table->integer('harga'); // Column for 'harga' with 10 digits and 2 decimal places
            $table->string('status'); // Column for 'status'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
