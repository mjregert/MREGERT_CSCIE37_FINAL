<?php

use Illuminate\Database\Seeder;
use App\Wishlist;

class WishitemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wishlist_id = Wishlist::where('name', '=', 'My First Wishlist')->pluck('id')->first();

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Wishitem #1',
            'cost' => '42',
            'wishlist_id' => $wishlist_id
        ]);

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Wishitem #2',
            'cost' => '100',
            'wishlist_id' => $wishlist_id
        ]);

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Wishitem #3',
            'cost' => '123',
            'wishlist_id' => $wishlist_id
        ]);

        $wishlist_id = Wishlist::where('name', '=', 'My First Wunschliste')->pluck('id')->first();

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Fußball-Spielball',
            'cost' => '24',
            'wishlist_id' => $wishlist_id
        ]);

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Spielzeugauto',
            'cost' => '10',
            'wishlist_id' => $wishlist_id
        ]);

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Regenstiefel',
            'cost' => '35',
            'wishlist_id' => $wishlist_id
        ]);
    }
}
