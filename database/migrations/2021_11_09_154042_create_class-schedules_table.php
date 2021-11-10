<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class-schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('users','id');
            $table->foreignId('subject_id')->constrained('subjects','id');
//            $table->foreignId('class_id')->constrained('users','id');
            $table->string('class_nm');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
//            $table->date('start_date');
//            $table->date('end_date');
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
        Schema::dropIfExists('class-schedules');
    }
}
