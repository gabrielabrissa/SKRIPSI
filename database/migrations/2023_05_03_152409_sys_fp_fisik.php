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
        Schema::create('sys_fp_fisik', function (Blueprint $table) {
            $table->id('ID');
            $table->string('FP_NUM');
            $table->string('FILENAME');
            $table->string('REAL_NAME');
            $table->string('PATH_FILE');
            $table->date('VALIDATE_DATE');
            $table->string('STATUS');
            $table->date('CREATION_DATE');
            $table->date('LAST_UPDATE_DATE');
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
