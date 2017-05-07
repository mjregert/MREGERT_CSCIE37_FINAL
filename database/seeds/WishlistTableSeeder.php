<?php

use Illuminate\Database\Seeder;

class WishlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wishlists')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'll' => 'en',
            'cc' => 'US',
            'name' => 'My First Wishlist',
            'description' => 'A test wishlist populated by the laravel framework seeder.',
            'total' => '399'
            //'purchaseDate' => ''
        ]);

        DB::table('wishlists')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'll' => 'ru',
            'cc' => 'RU',
            'name' => 'Мой первый русский список',
            'description' => 'Испытательный список желаний, заполненный сеялкой рамки laravel.',
            'total' => '345'
            //'purchaseDate' => ''
        ]);

        DB::table('wishlists')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'll' => 'ja',
            'cc' => 'JP',
            'name' => '私の最初の日本の欲しいもの',
            'description' => 'laravelフレームワークシーダーによって作成されたテストウィッシュリスト。',
            'total' => '1'
            //'purchaseDate' => ''
        ]);
    }
}
