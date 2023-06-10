<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_term', function (Blueprint $table) {
            $table->integer('TERM_ID',11)->autoIncrement();
            $table->string('TERM_NAME',45);
            $table->string('TERM_DESC',45);
            $table->integer('CREATED_BY')->nullable();
            $table->date('CREATION_DATE')->nullable();
            $table->integer('LAST_UPDATED_BY')->nullable();
            $table->date('LAST_UPDATED_DATE')->nullable();
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
};
