<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_inputs', function (Blueprint $table) {
            //Exam
            $table->integer('exam_id')->unsigned()->nullable();
            $table->foreign('exam_id')->
                references('id')->
                on('exams');
            //Input
            $table->integer('input_id')->unsigned()->nullable();
            $table->foreign('input_id')->
                references('id')->
                on('inputs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_inputs');
    }
}
