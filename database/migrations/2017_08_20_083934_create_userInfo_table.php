<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasTable('userInfo')) {
            //
            return;
        }
        Schema::create('userInfo', function (Blueprint $table) {
            $table->increments('userId');
            $table->string('fullName',150);
            $table->string('userEmail',150);
            $table->string('userPass',20);
            $table->string('userGender',2);
            $table->string('birthday',12);
            $table->string('contactNo',20);
            $table->text('address',250);
            $table->string('holdingType',10);
            $table->string('userType',12);
            $table->string('userPhoto');
            $table->softDeletes();
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
        //
        Schema::drop('userInfo');
    }
}
