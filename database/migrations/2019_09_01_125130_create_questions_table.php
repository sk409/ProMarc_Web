<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger("start_index")->unsigned();
            $table->smallInteger("end_index")->unsigned();
            $table->bigInteger("description_id")->unsigned();
            $table->timestamps();
            $table->foreign("description_id")->references("id")->on("descriptions")->onUpdate("cascade")->onDelete("cascade");
            $table->unique(["start_index", "end_index", "description_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}