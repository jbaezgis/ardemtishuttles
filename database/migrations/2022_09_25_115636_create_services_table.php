<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->integer('from')->nullable();
            $table->integer('to')->nullable();
            $table->string('slug')->nullable();
            $table->string('type')->nullable();
            $table->integer('driving_time')->nullable();
            $table->string('status')->nullable();
            $table->integer('booked')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
