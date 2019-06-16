<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = [
		        [
		            'name' => 'Mao Tsuji',
		            'email'  => 'mao@gmail.com',
		            'password' => 'maotsuji',
		        ],
		        [
		            'name' => 'Mariko Suzuki',
		            'email'  => 'mariko@gmail.com',
		            'password' => 'marikosuzuki',
		        ],
		        [
		           'name' => 'Motoki Higa',
		            'email'  => 'motoki@gmail.com',
		            'password' => 'motokihiga',
		        ],
		        [
		           'name' => 'Masaki Kono',
		            'email'  => 'masaki@gmail.com',
		            'password' => 'masakikono',
		        ],
		        [
		           'name' => 'Reo Okumura',
		            'email'  => 'Reo@gmail.com',
		            'password' => 'reookumura',
		        ],
		        [
		           'name' => 'Takeshita Yasuyuki',
		            'email'  => 'yasuyuki@gmail.com',
		            'password' => 'yasuyukitakeshita',
		        ],
		        [
		           'name' => 'Inoue Yuto',
		            'email'  => 'yuto@gmail.com',
		            'password' => 'yutoinoue',
		        ],
		        [
		           'name' => 'Maria Morishita',
		            'email'  => 'maria@gmail.com',
		            'password' => 'mariamorishita',
		        ],
		      ];

		      foreach ($users as $user) {
		        DB::table('users')->insert([
		            'name' => $user['name'],
		            'email' => $user['email'],
		            'password' => $user['password'],
		            'created_at' => Carbon::now(),
		            'updated_at' => Carbon::now(),
		        ]);
		   		}

    }
}
