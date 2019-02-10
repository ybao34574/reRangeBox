<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('items', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('name');
            $table->double('length');
            $table->double('width');
            $table->double('height');
            $table->double('volume');
            $table->double('weight');
            $table->integer('box_type');
            $table->integer('is_lay_down');
            $table->integer('stock');
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
        Schema::dropIfExists('items');
    }
}
