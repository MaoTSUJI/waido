<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        //このファイルを読み込むと、下のコマンドが実行される
        //php artisan db:seed --class=UsersTableSeeder
	    $this->call(ProverbsTableSeeder::class);
		    //php artisan db:seed --class=DiariesTableSeeder
        $this->call(AreasTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DialectsTableSeeder::class);
        $this->call(TitlesTableSeeder::class);

    }
}
