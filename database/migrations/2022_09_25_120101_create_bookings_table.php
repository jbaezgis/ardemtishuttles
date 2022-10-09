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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id')->nullable();
            $table->integer('service_price_id')->nullable();
            $table->integer('driver_id')->nullable();
            $table->integer('client_id')->nullable();
            $table->string('type')->nullable();
            $table->integer('from')->nullable();
            $table->integer('to')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('lang')->nullable();
            $table->integer('passengers')->nullable();
            $table->integer('adults')->nullable();
            $table->integer('children')->nullable();
            $table->integer('infants')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->integer('want_to_arrive')->nullable();
            $table->time('pickup_time')->nullable();
            $table->string('airline')->nullable();
            $table->string('flight_number')->nullable();
            $table->text('more_information')->nullable();
            $table->string('way')->nullable();
            $table->float('sub_total', 8, 2)->nullable();
            $table->float('discount', 8, 2)->nullable();
            $table->float('paid_amount', 8, 2)->nullable();
            $table->date('paid_date')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('balance_amount')->nullable();
            $table->string('balance_payment_method')->nullable();
            $table->boolean('email_sent')->default(0);
            $table->string('device')->nullable();
            $table->string('status')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
