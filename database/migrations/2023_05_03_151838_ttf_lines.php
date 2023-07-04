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
        Schema::create('ttf_lines', function (Blueprint $table) {
            $table->integer('TTF_LINE_ID',11)->autoIncrement();;
            $table->integer('TTF_ID');
            $table->foreign('TTF_ID')->references('TTF_ID')->on('ttf_headers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('TTF_BPB_ID');
            $table->integer('TTF_FP_ID');
            $table->foreign('TTF_FP_ID')->references('TTF_FP_ID')->on('ttf_fp')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('ACTIVE_FLAG',1);
            $table->date('CREATION_DATE')->nullable();
            $table->integer('CREATED_BY')->nullable();
            $table->date('LAST_UPDATE_DATE')->nullable();
            $table->integer('LAST_UPDATE_BY')->nullable();
            $table->integer('TTF_HEADERS_TTF_ID');
            $table->integer('TTF_FP_TTF_FP_ID');
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
