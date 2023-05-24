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
        Schema::create('ttf_headers', function (Blueprint $table) {
            $table->id('TTF_ID');
            $table->string('BRANCH_CODE');
            $table->string('VENDOR_SITE_CODE');
            $table->string('TTF_NUM')->unique();
            $table->date('TTF_DATE');
            $table->string('TTF_TYPE');
            $table->string('TTF_STATUS');
            $table->date('TTF_RETURN_DATE');
            $table->date('TTF_GIRO_DATE');
            $table->integer('ORG_ID');
            $table->string('SOURCE');
            $table->integer('REVIEWED_BY');
            $table->date('REVIEWED_DATE');
            $table->integer('CREATED_BY');
            $table->date('CREATED_DATE');
            $table->date('LAST_UPDATE_DATE');
            $table->integer('LAST_UPDATE_BY');
            $table->string('MEMO_NUM');
            $table->integer('JUMLAH_FP');
            $table->integer('SUM_DPP_FP');
            $table->integer('SUM_TAX_FP');
            $table->integer('JUMLAH_BPB');
            $table->integer('SUM_DPP_BPB');
            $table->integer('SUM_TAX_BPB');
            $table->integer('SELISIH_DPP');
            $table->integer('SELISIH_TAX');
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
