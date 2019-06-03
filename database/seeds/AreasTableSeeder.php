<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;	//DBクラスを使用
use Carbon\Carbon;	//Carbonクラスを使用

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = DB::table('users')->first();

        // array()の省略形[]
        $areas = [
        	[
        		'area' => '西部',
        		'hiragana' => 'にしべ',
        		'english' => 'nishibe'
        	],
        	[
        		'area' => '平良',
        		'hiragana' => 'ひらら',
        		'english' => 'hirara'
        	],
        	[
        		'area' => '多良間',
        		'hiragana' => 'たらま',
        		'english' => 'tarama'
        	]
        ];

      foreach ($areas as $area) {
      	DB::table('areas')->insert([ //INSERT INTO文が実行されている
      		'area' => $area['area'],
      		'hiragana' => $area['hiragana'],
          'english' => $area['english'],
      		'created_at' => Carbon::now(),
      		'updated_at' => Carbon::now()
      	]);

      }


    }
}
