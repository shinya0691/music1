<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        DB::table('music')->insert([
            'name'=> 'APT',
            'artist'=> 'Mrs.GREEN APPLE',
            'genre_id'=> 1,
        ]);
        DB::table('music')->insert([
            'name'=> '怪獣の花唄',
            'artist'=> 'vaundy',
            'genre_id'=> 1,
        ]);
        DB::table('music')->insert([
            'name'=> 'Bling-Bang-Bang-Born',
            'artist'=> 'Creepy Nuts',
            'genre_id'=> 4,
        ]);
        DB::table('music')->insert([
            'name'=> '	366日',
            'artist'=> 'HY',
            'genre_id'=> 1,
        ]); 
        DB::table('music')->insert([
            'name'=> 'さよーならまたいつか！',
            'artist'=> '米津玄師',
            'genre_id'=> 1,
        ]); 
        DB::table('music')->insert([
            'name'=> '点描の唄(feat.井上苑子)',
            'artist'=> 'Mrs.GREEN APPLE',
            'genre_id'=> 1,
        ]); 
        DB::table('music')->insert([
            'name'=> '残酷な天使のテーゼ',
            'artist'=> '高橋洋子',
            'genre_id'=> 3,
        ]); 
        DB::table('music')->insert([
            'name'=> 'Shake It Off',
            'artist'=> 'Taylor Swift',
            'genre_id'=> 6,
        ]); 
        DB::table('music')->insert([
            'name'=> 'What A Wonderful World',
            'artist'=> 'Louis Armstrong',
            'genre_id'=> 7,
        ]); 
        DB::table('music')->insert([
            'name'=> 'ディベルティメント第17番ニ長調K.334 第3楽章メヌエット',
            'artist'=> 'モーツァルト',
            'genre_id'=> 8,
        ]); 
        DB::table('music')->insert([
            'name'=> 'The Beginning',
            'artist'=> 'ONE OK ROCK',
            'genre_id'=> 9,
        ]); 
        DB::table('music')->insert([
            'name'=> '不可思議',
            'artist'=> 'wonderboy',
            'genre_id'=> 10,
        ]);
        DB::table('music')->insert([
            'name'=> 'やさしさに包まれたなら',
            'artist'=> '松任谷由実',
            'genre_id'=> 11,
        ]);
        DB::table('music')->insert([
            'name'=> '夜桜お七',
            'artist'=> '坂本冬美',
            'genre_id'=> 12,
        ]);
    }
}
