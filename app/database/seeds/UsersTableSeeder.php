<?php

class UsersTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		$users = array(
			array(
				'name' 		=> 'AmirolAhmad',
				'fullname' 	=> 'Amirol Ahmad',
				'password' 	=> Hash::make('password'),
				'email' 	=> 'test@testmail.com',
				'code' 		=> '',
				'active' 	=> ''
			)
		);

		DB::table('users')->insert($users);
	}
}