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
            'name' => 'Sony Playstation',
            'cost' => '400',
            'wishlist_id' => $wishlist_id
        ]);

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Tennis Shoes',
            'cost' => '100',
            'wishlist_id' => $wishlist_id
        ]);

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bicycle',
            'cost' => '125',
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

        $wishlist_id = Wishlist::where('name', '=', 'Мой первый русский список')->pluck('id')->first();

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Футбол',
            'cost' => '24',
            'wishlist_id' => $wishlist_id
        ]);

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Монопольная игра',
            'cost' => '15',
            'wishlist_id' => $wishlist_id
        ]);

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Джинсы',
            'cost' => '40',
            'wishlist_id' => $wishlist_id
        ]);

        DB::table('wishitems')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Чехол для телефона',
            'cost' => '45',
            'wishlist_id' => $wishlist_id
        ]);
    }
}
