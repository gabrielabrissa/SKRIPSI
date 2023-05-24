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
        Schema::create('ttf_lampiran', function (Blueprint $table) {
            $table->id('ID');
            $table->integer('TTF_ID');
            $table->string('PATH_FILE');
            $table->integer('FILE_SIZE');
            $table->date('UPDATE_DATE');
            $table->string('REAL_NAME');
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
