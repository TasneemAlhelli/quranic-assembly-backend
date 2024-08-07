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
        Schema::create('poetries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('founder');
            $table->string('activity_type');
            $table->date('founded');
            $table->string('background');
            $table->string('goal', 1024);
            $table->integer('member');
            $table->string('phone_number');
            $table->string('instagram');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poetries');
    }
};
