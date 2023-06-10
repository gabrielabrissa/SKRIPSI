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
        Schema::create('tmp_fp', function (Blueprint $table) {
            $table->integer('TMP_TTF_ID',11)->autoIncrement();
            $table->integer('TTF_ID');
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
            $table->integer('REVIEWED_BY');
            $table->integer('CREATED_BY');
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
            $table->integer('TTF_BPB_ID');
            $table->integer('TTF_FP_ID');
            $table->string('ACTIVE_FLAG',1);
            $table->string('FP_TYPE',45);
            $table->date('FP_DATE');
            $table->float('FP_DPP_AMT',14,2);
            $table->float('FP_TAX_AMT',14,2);
            $table->string('USED_FLAG',1);
    
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
};
