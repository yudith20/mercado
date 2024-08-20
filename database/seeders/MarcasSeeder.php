<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MarcasSeeder extends Seeder
{
    
    public function run(): void
    {
        $data = array([
            'nombre'=> 'nike',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=> 'pumas',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=> 'adidas',
            'created_at'=>Carbon::now()   
        ]);

        
        //Insertar la data en la tabla marcas
        DB::table('marcas')->insert($data);
    }
}
