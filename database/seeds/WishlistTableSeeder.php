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
            'locale' => 'en-US',
            'name' => 'My First Wishlist',
            'description' => 'A test wishlist populated by the laravel framework seeder.',
            'total' => '399',
            'saving' => '25',
            'buyDate' =>  Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('wishlists')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'locale' => 'en-UK',
            'name' => 'My First UK Wishlist',
            'description' => 'A test wishlist populated by the laravel framework seeder.',
            'total' => '399',
            'saving' => '25',
            'buyDate' =>  Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('wishlists')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'locale' => 'de-dE',
            'name' => 'My First Wunschliste',
            'description' => 'Ein Test der Wunschliste von der Laravel Rahmen Seeder bevölkert.',
            'total' => '399',
            'saving' => '25',
            'buyDate' =>  Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('wishlists')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'locale' => 'ru-RU',
            'name' => 'Мой первый русский список',
            'description' => 'Испытательный список желаний, заполненный сеялкой рамки laravel.',
            'total' => '399',
            'saving' => '25',
            'buyDate' =>  Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('wishlists')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'locale' => 'ja-JP',
            'name' => '私の最初の日本の欲しいもの',
            'description' => 'laravelフレームワークシーダーによって作成されたテストウィッシュリスト。',
            'total' => '399',
            'saving' => '25',
            'buyDate' =>  Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
