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
        Schema::create('sys_supp_site', function (Blueprint $table) {
            $table->id('SUPP_SITE_ID');
            $table->integer('SUPP_ID');
            $table->string('SUPP_SITE_CODE');
            $table->string('SUPP_SITE_ALT_NAME');
            $table->string('SUPP_BRANCH_CODE');
            $table->integer('SUPP_ORG_ID');
            $table->string('SUPP_ADDR_LINE1');
            $table->string('SUPP_ADDR_LINE2');
            $table->string('SUPP_ADDR_LINE3');
            $table->string('SUPP_ADDR_LINE4');
            $table->string('SUPP_ADDR_CITY');
            $table->string('SUPP_ADDR_PHONE');
            $table->string('SUPP_ADDR_PROVINCE');
            $table->integer('SUPP_TERM_ID');
            $table->string('SUPP_PAY_GROUP');
            $table->string('SUPP_PAYMENT_METHOD');
            $table->string('SUPP_TYPE');
            $table->string('SUPP_PKP_NUM');
            $table->string('SUPP_PKP_NAME');
            $table->string('SUPP_PKP_ADDR1');
            $table->string('SUPP_PKP_ADDR2');
            $table->integer('CREATED_BY');
            $table->date('CREATION_DATE');
            $table->date('LAST_UPDATE_DATE');
            $table->integer('LAST_UPDATE_BY');
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
