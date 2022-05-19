<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('proveedores')-> insert([
            [
                'nombres'=>'James Alberth',
                'apellido'=>'Reyes Calderón',
                'telefono'=>'87654321'
            ],
            [
                'nombres'=>'Esmirna',
                'apellido'=>'Calderón Rivera',
                'telefono'=>'87654321'
            ]
        ]);
    }
}
