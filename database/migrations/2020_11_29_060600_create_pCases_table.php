<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pCases', function (Blueprint $table) {
            $table->char('Nid',15)->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('address');
            $table->integer('salary');
            $table->date('birth_date');
            $table->integer('children_number');
            $table->char('marital_status',1);
            $table->char('monthly_treatment',1);
            $table->char('rent',1);
            $table->char('private_account',1);
            $table->string('notes');
            $table->char('support_status',1); // if all the support the case need complete it change to 'c'
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pCases');
    }
}
