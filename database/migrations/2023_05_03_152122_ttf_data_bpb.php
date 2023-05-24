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
        Schema::create('ttf_data_bpb', function (Blueprint $table) {
            $table->id('ID');
            $table->integer('BPB_ID');
            $table->string('BPB_NUMBER');
            $table->date('BPB_DATE');
            $table->integer('BPB_DPP');
            $table->integer('BPB_TAX');
            $table->string('NO_REF');
            $table->date('TGL_REF');
            $table->string('BRANCH_CODE');
            $table->integer('VENDOR_SITE_ID');
            $table->string('VENDOR_SITE_CODE');
            $table->string('USED_FLAG');
            $table->date('LAST_UPDATE_DATE');
            $table->integer('LAST_UPDATE_BY');
            $table->string('DC_CODE');
            $table->string('FLAG_PPN');
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
