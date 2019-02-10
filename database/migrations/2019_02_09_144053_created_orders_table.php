<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('order', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->integer('custom_id');
            $table->integer('status');
            $table->integer('item_count');
            $table->decimal('total_price');
            $table->double('net_weight');
            $table->double('gross_weight');
            $table->string('delivery_address');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no');
            $table->integer('item_no');
            $table->integer('item_count');
            $table->decimal('item_price');
            $table->decimal('total_price');
            $table->double('item_length');
            $table->double('item_width');
            $table->double('item_height');
            $table->double('item_volume');
            $table->double('item_weight');
            $table->string('ref_no');
            $table->string('lot_no');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('order_parcel_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no');
            $table->string('package_no');
            $table->string('package_size');
            $table->integer('parcel_count');
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
        //
        Schema::dropIfExists('order');
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('order_parcel_details');
    }
}
