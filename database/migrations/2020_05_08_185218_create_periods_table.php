<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String("name");
            $table->String("month");
            $table->string('year');
            $table->dateTime('date_on');
            $table->dateTime('date_off');
            $table->tinyInteger('on_year')->default(0);
            $table->tinyInteger('on_quarter')->default(0);
            $table->tinyInteger('on_month')->default(0);
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
        Schema::dropIfExists('periods');
    }
}
