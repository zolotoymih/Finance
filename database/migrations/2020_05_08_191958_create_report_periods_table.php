<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_periods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("type_reports_id");
            $table->integer("periods_id");
            $table->string("code_line");
            $table->double("A1");
            $table->double("A2");

            $table->tinyInteger('create')->default(0);
            $table->tinyInteger('control')->default(0);
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
        Schema::dropIfExists('report_periods');
    }
}
