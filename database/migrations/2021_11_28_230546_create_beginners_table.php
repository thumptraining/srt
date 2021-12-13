<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeginnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beginners', function (Blueprint $table) {
            $table->id();
            $table->integer('week');
            $table->string('day');
            $table->string('stages');
            $table->string('categories');
            $table->longText('warm');
            $table->integer('whours');
            $table->integer('wminute');
            $table->integer('wseconds');
            $table->string('wzone');
            $table->integer('rep');
            $table->longText('workout');
            $table->integer('thours');
            $table->integer('tminute');
            $table->integer('tseconds');
            $table->string('tzone');
            $table->longText('cool');
            $table->integer('chours');
            $table->integer('cminute');
            $table->integer('cseconds');
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
        Schema::dropIfExists('beginners');
    }
}
