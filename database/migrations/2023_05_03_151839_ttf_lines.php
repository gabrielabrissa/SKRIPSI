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
        Schema::create('ttf_lines', function (Blueprint $table) {
            $table->id('TTF_LINE_ID');
            $table->integer('TTF_ID');
            $table->integer('TTF_BPB_ID');
            $table->integer('TTF_FP_ID');
            $table->string('ACTIVE_FLAG');
            $table->date('CREATION_DATE');
            $table->integer('CREATED_BY');
            $table->date('LAST_UPDATE_DATE');
            $table->integer('LAST_UPDATE_BY');
            $table->integer('TTF_HEADERS_TTF_ID');
            $table->integer('TTF_FP_TTF_FP_ID');
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
