<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_tbl', function (Blueprint $table) {
            $table->increments('patient_id');
            $table->string('patient_name');
            $table->string('patient_phone');
            $table->string('patient_email');
            $table->string('patient_symptoms');
            $table->string('patient_date');
            $table->string('patient_department');
            $table->string('patient_gender');
            $table->string('patient_time');
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
        Schema::dropIfExists('appointment_tbl');
    }
}
