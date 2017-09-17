<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('treatment')) {
            //
            return;
        }
        Schema::create('treatment', function (Blueprint $table) {
            $table->increments('treatmentId');
            $table->string('patientEmail',150);
            $table->string('patientRelation',50);
            $table->string('patientName',150);
            $table->string('patientGender',2);
            $table->integer('patientAge');
            $table->float('latitude');
            $table->float('longitude');
            $table->string('diabetes',3);
            $table->string('pressure',3);
            $table->string('asthma',3);
            $table->text('currentDiseases',250);
            $table->text('symptom',250);
            $table->text('preDiseases',250);
            $table->string('doctorGender',2);
            $table->string('ambulance',3);
            $table->string('requestDate',12);
            $table->string('requestTime',10);
            $table->integer('doctorCharge');
            $table->integer('ambulanceCharge');
            $table->string('requestStatus',10);
            $table->string('chargeStatus',10);
            $table->string('doctorEmail',150);
            $table->string('treatmentStatus',10);
            $table->string('paymentStatus',5);
            $table->text('treatmentInfo',250);
            $table->text('userCommand',250);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('treatment');
    }
}
