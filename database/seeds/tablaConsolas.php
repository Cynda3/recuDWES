<?php

use Illuminate\Database\Seeder;

class tablaConsolas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('consolas')->insert([
            'name' => 'Ps4'        
        ]);
        DB::table('consolas')->insert([
            'name' => 'Nintendo'        
        ]);

        DB::table('consolas')->insert([
            'name' => 'Xbox'        
        ]);
    }
}
