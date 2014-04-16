<?php

class ReportsTableSeeder extends Seeder {
	public function run() {
		DB::table('reports')->delete();

		$reports = array(
			array(
				'owner_id' 				=> 1,
				'reporter' 				=> 'Amirol Ahmad',
				'scammer_name' 		=> 'Evalisa Andria',
				'nickname' 				=> 'Lisha',
				'scammer_email' 	=> 'lisa-cute@testmail.com',
				'age' 						=> '32',
				'dob' 						=> '20/03/1982',
				'nationality' 		=> 'Indonesia',
				'ic_number' 			=> 'A5785657',
				'profile_picture' => '',
				'attachment' 			=> '',
				'subject' 				=> 'Mencuri hati aku',
				'location' 				=> 'P. Pinang',
				'country' 				=> 'Malaysia',
				'contact_number' 	=> '60107152123',
				'acc_bank_number' => '163464526832',
				'bank_name' 			=> 'Maybank',
				'description' 		=> 'I met a girl named Lisha on Facebook. We talked for about 2 weeks. Then she said "I want to see you but have not enough money" She wanted money with Western Union. But I said her that I can give it from bank account then she gave me the account.',
			)
		);

		DB::table('reports')->insert($reports);
	}
}