<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('compras')-> insert([
            [
                'producto'=>'lapiz',
                'precio'=>'50',
                'cantidad'=>'20'
            ],
            [
                'producto'=>'anillo',
                'precio'=>'5000',
                'canitdad'=>'20'
            ]
        ]);
    }
}
