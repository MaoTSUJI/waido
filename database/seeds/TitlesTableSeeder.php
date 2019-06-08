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
		        ],
		        [
		            'title' => 'ジンベイザメ',
		            'img_url'  => 'jinbeizame.png',
		        ],
		        [
		            'title' => 'ジュゴン',
		            'img_url'  => 'dugong.png',
		        ],
		        [
		            'title' => 'イルカ',
		            'img_url'  => 'dolphin.png',
		        ],
		        [
		            'title' => 'ウミガメ',
		            'img_url'  => 'umigame.png',
		        ],
		        [
		            'title' => 'アオブダイ',
		            'img_url'  => 'aoubudai.png',
		        ],
		        [
		            'title' => 'ナンヨウハギ',
		            'img_url'  => 'nayouhagi.png',
		        ],
		        [
		            'title' => 'カクレクマノミ',
		            'img_url'  => 'kumanomi.png',
		        ],
		        [
		            'title' => 'イソギンチャク',
		            'img_url'  => 'isoginchaku.png',
		        ],
		        [
		            'title' => 'サンゴ',
		            'img_url'  => 'sango.png',
		        ],
		    ];

		    foreach ($titles as $title) {
		        DB::table('titles')->insert([
		            'title' => $title['title'],
		            'img_url' => $title['img_url'],
		            'created_at' => Carbon::now(),
		            'updated_at' => Carbon::now(),
		        ]);
		    }
    }
}
