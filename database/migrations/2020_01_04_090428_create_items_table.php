<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('users_id');
            $table->string('item_name');
            $table->string('item_brand');
            $table->bigInteger('item_qty');
            $table->string('img_dir');
            $table->bigInteger('archived')->nullable();
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
        Schema::dropIfExists('t_items');
    }
}
