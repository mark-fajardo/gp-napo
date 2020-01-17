<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_items', function (Blueprint $table) {
            $table->string('item_short_description')->after('item_qty');
            $table->text('item_description')->after('item_short_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_items', function (Blueprint $table) {
            $table->dropColumn('item_short_description');
            $table->dropColumn('item_description');
        });
    }
}
