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
            $table->integer('SUPP_SITE_ID',11)->autoIncrement();
            $table->integer('SUPP_ID');
            $table->string('SUPP_SITE_CODE',6);
            $table->string('SUPP_SITE_ALT_NAME',45);
            $table->string('SUPP_BRANCH_CODE',6);
            $table->string('SUPP_ADDR_LINE1',45);
            $table->string('SUPP_ADDR_LINE2',45)->nullable();
            $table->string('SUPP_ADDR_LINE3',45)->nullable();
            $table->string('SUPP_ADDR_LINE4',45)->nullable();
            $table->string('SUPP_ADDR_CITY',45)->nullable();
            $table->string('SUPP_ADDR_PHONE',45)->nullable();
            $table->string('SUPP_ADDR_PROVINCE',45);
            $table->integer('SUPP_TERM_ID');
            $table->foreign('SUPP_TERM_ID')->references('TERM_ID')->on('sys_term')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('SUPP_PAY_GROUP',45)->nullable();
            $table->string('SUPP_PAYMENT_METHOD',45)->nullable();
            $table->string('SUPP_TYPE',45)->nullable();
            $table->string('SUPP_PKP_NUM',45);
            $table->string('SUPP_PKP_NAME',45);
            $table->string('SUPP_PKP_ADDR1',45);
            $table->string('SUPP_PKP_ADDR2',45)->nullable();
            $table->integer('CREATED_BY')->nullable();
            $table->date('CREATION_DATE')->nullable();
            $table->integer('LAST_UPDATED_BY')->nullable();
            $table->date('LAST_UPDATED_DATE')->nullable();
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
