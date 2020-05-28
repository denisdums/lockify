<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('categorie');
            $table->string('description');
            $table->string('adresse');
            $table->string('ville');
            $table->string('pays');
            $table->integer('clientmax');
            $table->integer('creneau');
            $table->string('avatar');
            $table->boolean('monday');
            $table->boolean('monday_morn');
            $table->time('monday_morn_start');
            $table->time('monday_morn_end');
            $table->boolean('monday_after');
            $table->time('monday_after_start');
            $table->time('monday_after_end');
            $table->boolean('tuesday');
            $table->boolean('tuesday_morn');
            $table->time('tuesday_morn_start');
            $table->time('tuesday_morn_end');
            $table->boolean('tuesday_after');
            $table->time('tuesday_after_start');
            $table->time('tuesday_after_end');
            $table->boolean('wednesday');
            $table->boolean('wednesday_morn');
            $table->time('wednesday_morn_start');
            $table->time('wednesday_morn_end');
            $table->boolean('wednesday_after');
            $table->time('wednesday_after_start');
            $table->time('wednesday_after_end');
            $table->boolean('thursday');
            $table->boolean('thursday_morn');
            $table->time('thursday_morn_start');
            $table->time('thursday_morn_end');
            $table->boolean('thursday_after');
            $table->time('thursday_after_start');
            $table->time('thursday_after_end');
            $table->boolean('friday');
            $table->boolean('friday_morn');
            $table->time('friday_morn_start');
            $table->time('friday_morn_end');
            $table->boolean('friday_after');
            $table->time('friday_after_start');
            $table->time('friday_after_end');
            $table->boolean('saturday');
            $table->boolean('saturday_morn');
            $table->time('saturday_morn_start');
            $table->time('saturday_morn_end');
            $table->boolean('saturday_after');
            $table->time('saturday_after_start');
            $table->time('saturday_after_end');
            $table->boolean('sunday');
            $table->boolean('sunday_morn');
            $table->time('sunday_morn_start');
            $table->time('sunday_morn_end');
            $table->boolean('sunday_after');
            $table->time('sunday_after_start');
            $table->time('sunday_after_end');
            $table->string('password');
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
    }
}
