<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('post_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('delivery_type');
            $table->string('delivery_city');
            $table->decimal('default_weight_price');
            $table->decimal('extra_weight_price');
            $table->integer('volume_param');
            $table->decimal('coupon');
            $table->string('remark');
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
        Schema::dropIfExists('post_info');
    }
}
