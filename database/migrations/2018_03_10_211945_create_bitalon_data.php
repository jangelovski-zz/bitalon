<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitalonData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bitalon_main_data', function (Blueprint $table) {

            $table->increments('id');
            $table->string('__type');
            $table->integer('BOOK_ID')->unique();
            $table->integer('YEAR_BIRTH');
            $table->string('SOURCE');
            $table->string('FATE');
            $table->string('TRANSPORT');
            $table->string('PLACE');
            $table->string('FIRST_NAME');
            $table->string('LAST_NAME');
            $table->string('COUNTRY_RESIDENCE');
            $table->integer('YEAR_DEATH');
            $table->string('COUNTRY_DEATH');
            $table->integer('CLUSTER');
            $table->integer('ROW_NUM');
            $table->string('MAIDENAME');
            $table->string('PLACE_DEATH');
            $table->integer('GENDER_VALUE');
            $table->string('FATHER_FIRST_NAME');
            $table->string('MOTHER_FIRST_NAME');
            $table->string('MOTHER_MAIDEN_NAME');
            $table->string('SUBMITTER_FIRST_NAME');
            $table->string('SUBMITTER_LAST_NAME');
            $table->string('SUBMITTER_COUNTRY');
            $table->string('RELATIONSHIP_TO_VICTIM');
            $table->rememberToken();
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
        Schema::dropIfExists('bitalon_main_data');
    }
}
