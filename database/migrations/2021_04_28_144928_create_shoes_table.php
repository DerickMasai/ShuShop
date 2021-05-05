<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('thumbnail_main');
            $table->string('thumbnail_one');
            $table->string('thumbnail_two');
            $table->string('thumbnail_three');
            $table->string('thumbnail_four');
            $table->string('thumbnail_five');
            $table->integer('primary_price');
            $table->integer('secondary_price');
            $table->timestamp('offer_expiry_date')->nullable();
            $table->longText('description');
            $table->integer('quantity');
            $table->string('tag', 25);
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
        Schema::dropIfExists('shoes');
    }
}
