<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NamesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Name::create([
				'first' => $faker->firstName,
				'last' => $faker->lastName,
				'suffix' => $faker->suffix,
				'title' => $faker->prefix
			]);
		}
	}

}