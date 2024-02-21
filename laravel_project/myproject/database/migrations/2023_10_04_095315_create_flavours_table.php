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
        Schema::create('flavours', function (Blueprint $table) {
            $table->id('flavour_id');
			$table->unsignedBigInteger('category_id');
			$table->foreign('category_id')->references('category_id')->on('categories');
			$table->string('flavour_name');
			$table->file('flavour_image');
			$table->float('main_price');
			$table->float('discount_price');
			$table->longText('description');
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
        Schema::dropIfExists('flavours');
    }
};
