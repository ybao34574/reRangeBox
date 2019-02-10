<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedParcelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('parcel_info', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('pn_no');
            $table->double('inner_length');
            $table->double('inner_width');
            $table->double('inner_height');
            $table->double('outer_length');
            $table->double('outer_width');
            $table->double('outer_height');
            $table->double('volume');
            $table->double('weight');
            $table->integer('ordinary');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('parcel_chosen', function (Blueprint $table) {
            $table->string('order_no')->unique();
            $table->string('parcel_id');
            $table->integer('status');
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
        Schema::dropIfExists('parcel_info');
        Schema::dropIfExists('parcel_chosen');
    }
}
