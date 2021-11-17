<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
			'nombre' => 'Lautaro',
			'apellidos' => 'Menidizabal',
            'num_pacientes' => '4',
		]);
        DB::table('doctors')->insert([
			'nombre' => 'Jokin',
			'apellidos' => 'Altuna',
            'num_pacientes' => '8',
		]);
    }
}
