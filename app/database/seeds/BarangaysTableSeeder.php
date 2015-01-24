<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BarangaysTableSeeder extends Seeder {

	public function run()
	{

		foreach(range(1, 10) as $key => $index)
		{
			Barangay::create([
				'barangay' => 'barangay' . $key,
				'district' => 'district' . $key,
				'locality' => 'locality' . $key,
				'rep1' => 'rep1 ' . $key,
				'rep2' => 'rep2 ' . $key,
				'contact1' => 'contact1 ' . $key,
				'contact2' => 'contact2 ' . $key,
				'email1' => 'email1 ' . $key,
				'email2' => 'email2 ' . $key,

			]);
		}
	}

}