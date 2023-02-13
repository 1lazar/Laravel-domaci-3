<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDatesToStringReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('time_from')->change();
            $table->string('time_to')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            // $table->date('time_from')->change();
            // $table->date('time_to')->change();
        });
    }
}
