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
            $table->id('SUPP_ID');
            $table->string('SUPP_CODE');
            $table->string('SUPP_NAME');
            $table->string('SUPP_EMAIL');
            $table->integer('CREATED_BY');
            $table->date('CREATION_DATE');
            $table->date('LAST_UPDATE_DATE');
            $table->integer('LAST_UPDATE_BY');
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
