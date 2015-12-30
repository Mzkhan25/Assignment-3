<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('codes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('code');
            $table->timestamps();
        });
    }


    public function down()
    {
        //
    }
}
