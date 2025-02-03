<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            'name'=> 'J-pop',
        ]);
        DB::table('genres')->insert([
            'name'=> 'K-pop',
        ]);
        DB::table('genres')->insert([
            'name'=> 'アニメ',
        ]);
        DB::table('genres')->insert([
            'name'=> 'ヒップホップ',
        ]);
        DB::table('genres')->insert([
            'name'=> 'レゲエ',
        ]);
        DB::table('genres')->insert([
            'name'=> '洋楽',
        ]);
        DB::table('genres')->insert([
            'name'=> 'ジャズ',
        ]);
        DB::table('genres')->insert([
            'name'=> 'クラシック',
        ]);
        DB::table('genres')->insert([
            'name'=> 'ロック',
        ]);
        DB::table('genres')->insert([
            'name'=> 'ラップ',
        ]);
        DB::table('genres')->insert([
            'name'=> '歌謡曲',
        ]);
        DB::table('genres')->insert([
            'name'=> '演歌',
        ]);

    }
}
