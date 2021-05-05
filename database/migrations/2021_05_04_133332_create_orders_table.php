<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code');
            $table->integer('transaction_ref_no');
            $table->integer('item_id');
            $table->string('item_thumbnail');
            $table->string('item_title');
            $table->string('item_category');
            $table->integer('item_price');
            $table->integer('item_qnty');
            $table->integer('customer_id');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_address');
            $table->string('customer_zip_code');
            $table->string('customer_region');
            $table->string('customer_city');
            $table->string('customer_organization')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
