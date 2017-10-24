<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('careerId');
            $table->string('fullName',150);
            $table->string('email',150);
            $table->string('gender',2);
            $table->string('birthday',12);
            $table->string('contactNo',20);
            $table->text('address',250);
            $table->string('photo');
            $table->string('nid',20);
            $table->string('specialistOn',250);
            $table->string('aboutMe',10);
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
        Schema::dropIfExists('career');
    }
}
