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
            $table->integer('TTF_ID',11)->autoIncrement();
            $table->string('BRANCH_CODE',6);
            $table->string('VENDOR_SITE_CODE',6);
            $table->string('TTF_NUM',45)->unique();
            $table->date('TTF_DATE');
            $table->string('TTF_TYPE',45);
            $table->string('TTF_STATUS',45);
            $table->date('TTF_RETURN_DATE');
            $table->date('TTF_GIRO_DATE');
            $table->integer('ORG_ID')->nullable();
            $table->string('SOURCE',45);
            $table->integer('REVIEWED_BY')->nullable();
            $table->date('REVIEWED_DATE')->nullable();
            $table->integer('CREATED_BY')->nullable();
            $table->date('CREATED_DATE')->nullable();
            $table->date('LAST_UPDATE_DATE')->nullable();
            $table->integer('LAST_UPDATE_BY')->nullable();
            $table->string('MEMO_NUM',45);
            $table->float('JUMLAH_FP',14,2);
            $table->float('SUM_DPP_FP',14,2);
            $table->float('SUM_TAX_FP',14,2);
            $table->float('JUMLAH_BPB',14,2);
            $table->float('SUM_DPP_BPB',14,2);
            $table->float('SUM_TAX_BPB',14,2);
            $table->float('SELISIH_DPP',14,2);
            $table->float('SELISIH_TAX',14,2);
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
