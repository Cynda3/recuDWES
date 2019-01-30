<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class tablaGeneros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('generos')->insert([
            'name' => 'Accion'        
        ]);
        DB::table('generos')->insert([
            'name' => 'Aventura'        
        ]);
        DB::table('generos')->insert([
            'name' => 'Ficcion'        
        ]);
    }
}
