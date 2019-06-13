<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
		        [
		            'title' => 'ザトウクジラ',
		            'img_url'  => 'zatoukujira.png',
		            'correct_num' => '10',
		        ],
		        [
		            'title' => 'ジンベイザメ',
		            'img_url'  => 'jinbeizame.png',
		            'correct_num' => '9',
		        ],
		        [
		            'title' => 'ジュゴン',
		            'img_url'  => 'dugong.png',
		            'correct_num' => '8',
		        ],
		        [
		            'title' => 'イルカ',
		            'img_url'  => 'dolphin.png',
		            'correct_num' => '7',
		        ],
		        [
		            'title' => 'ウミガメ',
		            'img_url'  => 'umigame.png',
		            'correct_num' => '6',
		        ],
		        [
		            'title' => 'アオブダイ',
		            'img_url'  => 'aobudai.png',
		            'correct_num' => '5',
		        ],
		        [
		            'title' => 'ナンヨウハギ',
		            'img_url'  => 'nayouhagi.png',
		            'correct_num' => '4',
		        ],
		        [
		            'title' => 'カクレクマノミ',
		            'img_url'  => 'kumanomi.png',
		            'correct_num' => '3',
		        ],
		        [
		            'title' => 'クラゲ',
		            'img_url'  => 'kurage.png',
		            'correct_num' => '2',
		        ],
		        [
		            'title' => 'イソギンチャク',
		            'img_url'  => 'isoginchaku.png',
		            'correct_num' => '1',
		        ],
		        [
		            'title' => 'サンゴ',
		            'img_url'  => 'sango.png',
		            'correct_num' => '0',
		        ],

		    ];

		    foreach ($titles as $title) {
		        DB::table('titles')->insert([
		            'title' => $title['title'],
		            'img_url' => $title['img_url'],
		            'correct_num' => $title['correct_num'],
		            'created_at' => Carbon::now(),
		            'updated_at' => Carbon::now(),
		        ]);
		    }
    }
}
