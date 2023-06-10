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
            $table->integer('ID',11)->autoIncrement();
            $table->integer('USER_ID');
            $table->foreign('USER_ID')->references('ID_USER')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('SUPP_SITE_CODE',6);
            $table->string('BRANCH_CODE',6);
            $table->date('DATE');
            $table->string('STATUS',1)->default('Y');
            $table->string('TRANSFER_FLAG',1)->nullable();
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
