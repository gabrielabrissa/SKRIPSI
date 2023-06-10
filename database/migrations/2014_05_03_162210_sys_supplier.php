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
        Schema::create('sys_supplier', function (Blueprint $table) {
            $table->integer('SUPP_ID',11)->autoIncrement();
            $table->string('SUPP_CODE',10);
            $table->string('SUPP_NAME',45); 
            $table->string('SUPP_EMAIL',45);
            $table->integer('CREATED_BY')->nullable();
            $table->date('CREATION_DATE')->nullable();
            $table->date('LAST_UPDATE_DATE')->nullable();
            $table->integer('LAST_UPDATE_BY')->nullable();
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
