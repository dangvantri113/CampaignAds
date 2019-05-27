<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<10;$i++){
            DB::table('catalogs')->insert([
                'name'=>Str::random()
            ]);
        }
    }
}
