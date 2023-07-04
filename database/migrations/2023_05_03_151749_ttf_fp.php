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
            $table->integer('TTF_FP_ID')->autoIncrement();
            $table->integer('TTF_ID');
            $table->foreign('TTF_ID')->references('TTF_ID')->on('ttf_headers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('FP_NUM',45);
            $table->string('FP_TYPE',45);
            $table->date('FP_DATE');
            $table->float('FP_DPP_AMT',14,2);
            $table->float('FP_TAX_AMT',14,2);
            $table->string('USED_FLAG',1);
            $table->integer('CREATED_BY')->nullable();
            $table->date('CREATION_DATE')->nullable();
            $table->integer('LAST_UPDATE_BY')->nullable();
            $table->date('LAST_UPDATE_DATE')->nullable();
            $table->integer('TTF_HEADERS_TTF_ID');
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
