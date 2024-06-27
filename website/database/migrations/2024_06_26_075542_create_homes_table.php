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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('acreage')->nullable();
            $table->integer('number_floors')->nullable();
            $table->integer('number_rooms')->nullable();
            $table->string('images')->nullable();
            $table->string('images_hd')->nullable();
            $table->longText('note')->nullable();
            $table->string('status')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price_coc')->nullable();
            $table->integer('payment_period')->nullable();
            $table->string('day_start')->nullable();
            $table->string('day_end')->nullable();
            $table->string('code_home')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
