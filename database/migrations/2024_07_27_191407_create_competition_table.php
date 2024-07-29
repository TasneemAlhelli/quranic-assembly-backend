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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('section');
            $table->string('founder');
            $table->string('supervisor');
            $table->string('phone_number');
            $table->string('age');
            $table->string('goal', 1000);
            $table->string('reason', 1000);
            $table->string('url');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compeitions');
    }
};
