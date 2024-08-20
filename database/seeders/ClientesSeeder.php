<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre'=>'maria',
            'edad'=>30,
            'categoria'=> 1,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'julia',
            'edad'=>45,
            'categoria'=> 2,
            'created_at'=>Carbon::now()
        ]);

        DB::table('clientes')->insert($data);
    }
}
