<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;	//DBクラスを使用
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array()の省略形[]
        $categories = [
        	[
	        	'category' => '人'
        	],
        	[	'category' => '体の部位'
        	],
        	[
	        	'category' => '気持ち'
        	],
        	[
	        	'category' => '状態'
        	],
        	[
	        	'category' => 'あいさつ'
        	],
        	[
	        	'category' => '質問'
        	],
        	[
	        	'category' => '性格'
        	],
        	[
	        	'category' => '野菜'
        	],
        	[
	        	'category' => '食べ物'
        	],
        	[
	        	'category' => '生き物'
        	],
        	[
	        	'category' => '自然'
        	],
        	[
	        	'category' => '植物'
        	],
        	[
	        	'category' => '時間'
        	],
        	[
	        	'category' => '月'
        	],
        	[
	        	'category' => '数'
        	],
        	[
	        	'category' => '長さ'
        	],
        	[
	        	'category' => '方角'
        	],
        	[
	        	'category' => '地域'
        	],
        	[
	        	'category' => 'その他'
        	],

        ];

      foreach ($categories as $category) {
      	DB::table('categories')->insert([ //INSERT INTO文が実行されている
      		'category' => $category['category'],
      		'created_at' => Carbon::now(),
      		'updated_at' => Carbon::now()
      	]);
      }

    }
}
