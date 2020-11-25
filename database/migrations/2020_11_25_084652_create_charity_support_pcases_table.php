<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharitySupportPcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charity_support_pcases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('charity_id');
            $table->unsignedBigInteger('support_id');
            $table->char('case_id',15);
            $table->char('status',1); // if the support complete in from the charity 
            $table->string('notes');
            $table->date('start_Date');
            $table->timestamps();
            $table->foreign('charity_id')->references('id')->on('charities');
            $table->foreign('support_id')->references('id')->on('supports');
            $table->foreign('case_id')->references('Nid')->on('pcases');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charity_support_pcases');
    }
}
