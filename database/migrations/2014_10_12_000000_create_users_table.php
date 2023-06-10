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
        Schema::create('user', function (Blueprint $table) {
            
            $table->integer('ID_USER',11)->autoIncrement();
            $table->integer('ID_ROLEUSER');
            $table->foreign('ID_ROLEUSER')->references('ID_ROLEUSER')->on('role_user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('USERNAME',30);
            $table->string('USER_EMAIL',320);
            $table->string('PASSWORD',100);
            $table->integer('SUPP_ID')->nullable();
            $table->foreign('SUPP_ID')->references('SUPP_ID')->on('sys_supplier')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('RESET_FLAG',1)->default('N');
            $table->string('ACTIVE_FLAG',1)-> default('Y');
            $table->integer('ORG_ID')->nullable();
            $table->string('APPROVED_BY',10)->nullable();
            $table->date('APPROVED_DATE')->nullable();
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
        Schema::dropIfExists('users');
    }
};
