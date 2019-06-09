<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('metadescription')->nullable();
            $table->string('metakeywords')->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('variations_description')->nullable();
            $table->mediumText('variations_table')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->default('');
            $table->string('slug')->default('');
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
        Schema::dropIfExists('products');
    }
}
