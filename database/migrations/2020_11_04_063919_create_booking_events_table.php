<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_events', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('email',25);
            $table->integer('phone');
            $table->string('no_person',20);
            $table->string("event_name",15);
            $table->string('location',20);
            $table->string('entry',20);
            $table->string("date",20);
            $table->string('time',15);
            
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
        Schema::dropIfExists('booking_events');
    }
}
