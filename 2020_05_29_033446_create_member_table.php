<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->text('date');
            $table->string('sh')->default('1');
            $table->timestamps();

        });
    }
    // $table->increments('id');
    // $table->text('uname');
    // $table->string('username');
    // $table->string('password');
    // $table->string('email');
    // $table->string('sex');
    // $table->string('orderPaper')->default('0');
    // $table->string('birthday');
    // $table->string('phone');
    // $table->string('Area');
    // $table->string('cityarea');
    // $table->string('cuszip');
    // $table->string('cusadr');
    // $table->text('date');
    // $table->string('sh')->default('1');
    // $table->timestamps();
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}
