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
            'cost' => '1234',
            'wishlist_id' => $wishlist_id
        ]);
    }
}
