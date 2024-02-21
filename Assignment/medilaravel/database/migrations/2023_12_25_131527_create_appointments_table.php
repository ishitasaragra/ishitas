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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('aid');
			$table->string('patient_name');
			$table->bigInteger('phonenumber');
			$table->string('symptoms');
			$table->unsignedBigInteger('doctor_id');
			$table->foreign('doctor_id')->references('doctor_id')->on('doctors');
			$table->unsignedBigInteger('did');
			$table->foreign('did')->references('did')->on('departments');
			$table->date('a_date');
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
        Schema::dropIfExists('appointments');
    }
};
