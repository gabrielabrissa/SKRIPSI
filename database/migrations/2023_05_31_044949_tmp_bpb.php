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
        Schema::create('tmp_bpb', function (Blueprint $table) {
            $table->integer('ID',11)->autoIncrement();
            $table->bigInteger('BPB_ID');
            $table->string('BPB_NUMBER',45);
            $table->date('BPB_DATE');
            $table->float('BPB_DPP',14,2);
            $table->float('BPB_TAX',14,2);
            $table->string('NO_REF',45);
            $table->date('TGL_REF');
            $table->string('BRANCH_CODE',6);
            $table->integer('VENDOR_SITE_ID');//primary key ditable oracle
            $table->string('VENDOR_SITE_CODE',10);
            $table->string('USED_FLAG',1);
            $table->string('DC_CODE',1)->default('Y'); //kode gudang
            $table->string('FLAG_PPN',1)->default('Y'); 
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
