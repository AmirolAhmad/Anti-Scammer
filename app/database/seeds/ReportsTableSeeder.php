<?php

class ReportsTableSeeder extends Seeder {
	public function run() {
		DB::table('reports')->delete();

		$reports = array(
			array(
				'owner_id' 			=> 1,
				'subject' 			=> 'Mencuri hati aku',
				'reporter' 			=> 'Amirol Ahmad',
				'scammer_name' 		=> 'Evalisa Andria',
				'location' 			=> 'P. Pinang',
				'country' 			=> 'Malaysia',
				'contact_number' 	=> '60107152123',
				'acc_bank_number' 	=> '163464526832',
				'bank_name' 		=> 'Maybank'
			),

			array(
				'owner_id' 			=> 1,
				'subject' 			=> 'Beli barang tak dapat',
				'reporter' 			=> 'Amirol Ahmad',
				'scammer_name' 		=> 'Johan Kamil',
				'location' 			=> 'Perak',
				'country' 			=> 'Malaysia',
				'contact_number' 	=> '60196452235',
				'acc_bank_number' 	=> '274638746298',
				'bank_name' 		=> 'CIMB'
			),

			array(
				'owner_id' 			=> 1,
				'subject' 			=> 'Lepas bayar RM10k terus hilang',
				'reporter' 			=> 'Amirol Ahmad',
				'scammer_name' 		=> 'Syaza Arina',
				'location' 			=> 'Selangor',
				'country' 			=> 'Malaysia',
				'contact_number' 	=> '60136635264',
				'acc_bank_number' 	=> '225487532546',
				'bank_name' 		=> 'Maybank'
			)
		);

		DB::table('reports')->insert($reports);
	}
}