<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder {

	public function run()
	{
		DB::table('usuarios')->insert(array(
				'codigo'	=> 37079,
				'cedula' 	=> 15093281,
				'nombres'  	=> 'Ramon Jose',
				'apellidos'	=> 'Gimenez Tamayo',
				'email'     => '15093281@aptca.net',
				'password'  =>  \Hash::make('12345678')
		));
	}

}