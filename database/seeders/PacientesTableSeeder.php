<?php

namespace Database\Seeders;

use DB;
use App\Models\Doctor;
use Illuminate\Database\Seeder;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'nombre' => 'Mikel',
            'apellidos' => 'Mendizabal',
            'dni' => '156165M',
            'fecha_nacimiento' => null,
            'vacunado' => 'true',
            'doctor_id' => Doctor::all()->random()->id,
		]);
        DB::table('pacientes')->insert([
            'nombre' => 'Unai',
            'apellidos' => 'Aguirre',
            'dni' => '123456',
            'fecha_nacimiento' => null,
            'vacunado' => 'true',
            'doctor_id' => Doctor::all()->random()->id,
		]);
        DB::table('pacientes')->insert([
            'nombre' => 'Oihan',
            'apellidos' => 'Pintado',
            'dni' => '156165',
            'fecha_nacimiento' => date(''),
            'vacunado' => 'false',
            'doctor_id' => Doctor::all()->random()->id,
		]);
        DB::table('pacientes')->insert([
            'nombre' => 'Ana',
            'apellidos' => 'Hirugaztelu',
            'dni' => '156165',
            'fecha_nacimiento' => date(''),
            'vacunado' => 'true',
            'doctor_id' => Doctor::all()->random()->id,
		]);
        DB::table('pacientes')->insert([
            'nombre' => 'Unai',
            'apellidos' => 'Iriarte',
            'dni' => '156165',
            'fecha_nacimiento' => date(''),
            'vacunado' => 'true',
            'doctor_id' => Doctor::all()->random()->id,
		]);
        DB::table('pacientes')->insert([
            'nombre' => 'Imanol',
            'apellidos' => 'Mendizabal',
            'dni' => '156165',
            'fecha_nacimiento' => date(''),
            'vacunado' => 'true',
            'doctor_id' => Doctor::all()->random()->id,
		]);
        DB::table('pacientes')->insert([
            'nombre' => 'Rodrigo',
            'apellidos' => 'Mendizabal',
            'dni' => '156165',
            'fecha_nacimiento' => date(''),
            'vacunado' => 'true',
            'doctor_id' => Doctor::all()->random()->id,
		]);
        DB::table('pacientes')->insert([
            'nombre' => 'Mikel',
            'apellidos' => 'Martinez',
            'dni' => '156165',
            'fecha_nacimiento' => date(''),
            'vacunado' => 'true',
            'doctor_id' => Doctor::all()->random()->id,
		]);
        DB::table('pacientes')->insert([
            'nombre' => 'Andi',
            'apellidos' => 'y Lucas',
            'dni' => '156165',
            'fecha_nacimiento' => date(''),
            'vacunado' => 'true',
            'doctor_id' => Doctor::all()->random()->id,
		]);
        DB::table('pacientes')->insert([
            'nombre' => 'Evaristo',
            'apellidos' => 'Paramos',
            'dni' => '156165',
            'fecha_nacimiento' => date(''),
            'vacunado' => 'true',
            'doctor_id' => Doctor::all()->random()->id,
		]);
    }
}
