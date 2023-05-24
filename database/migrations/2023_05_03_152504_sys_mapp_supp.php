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
        Schema::create('sys_mapp_supp', function (Blueprint $table) {
            $table->id('ID');
            $table->integer('USER_ID');
            $table->string('SUPP_SITE_CODE');
            $table->string('BRANCH_CODE');
            $table->date('DATE');
            $table->string('STATUS');
            $table->string('TRANSFER_FLAG');
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
