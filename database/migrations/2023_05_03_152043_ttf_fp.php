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
        Schema::create('ttf_fp', function (Blueprint $table) {
            $table->id('TTF_FP_ID');
            $table->integer('TTF_ID');
            $table->string('FP_NUM');
            $table->string('FP_TYPE');
            $table->date('FP_DATE');
            $table->integer('FP_DPP_AMT');
            $table->integer('FP_TAX_AMT');
            $table->string('USED_FLAG');
            $table->integer('CREATED_BY');
            $table->date('CREATION_DATE');
            $table->integer('LAST_UPDATE_BY');
            $table->date('LAST_UPDATE_DATE');
            $table->integer('TTF_HEADERS_TTF_ID');
            $table->string('SCAN_FLAG');
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
