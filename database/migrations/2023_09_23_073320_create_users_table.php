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
        Schema::create('cellphone', function (Blueprint $table) {
            $table->string('image');
            $table->string('name');
            $table->integer('original_price');
            $table->integer('discount_price');
            $table->integer('type');
            $table->integer('sticky');
            $table->string('sale');
            $table->string('special_offer');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cellphone');
    }
};
