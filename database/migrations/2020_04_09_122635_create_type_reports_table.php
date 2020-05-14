<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String("name");
            $table->string('code');
            $table->string('name_form');
            $table->tinyInteger('on_year')->default(0);
            $table->tinyInteger('on_quarter')->default(0);
            $table->tinyInteger('on_month')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->integer("kind_reports_id");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_reports');
    }
}
