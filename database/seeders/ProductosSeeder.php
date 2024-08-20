<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //definamos el areglo de datos a inserta
        $data = array([
            'nombre'=>'zapatos',
            'precio'=>59.99,
            'marca'=> 1,
            'created_at'=> Carbon::now()
        ],[
            'nombre'=>'camisa',
            'precio'=>'35.19',
            'marca'=> 2,
            'created_at'=> Carbon::now()   
        ]);

        //inserta la data en la tabla productos
        DB::table('productos')->insert($data);
    }
}
