<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTickketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickkets', function (Blueprint $table) {
            $table->id();
            $table->string('eventName');
            $table->string('bandName');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('portfolio');
            $table->unsignedBigInteger('ticketPrice');
            $table->string('status');
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
        Schema::dropIfExists('tickkets');
    }
}
