<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectWishlistsAndWishitems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wishitems', function (Blueprint $table) {
            $table->integer('wishlist_id')->unsigned();
            $table->foreign('wishlist_id')->references('id')->on('wishlists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wishitems', function (Blueprint $table) {
            $table->dropForeign('wishitems_wishlist_id_foreign');
            $table->dropColumn('wishlist_id');
        });
    }
}
