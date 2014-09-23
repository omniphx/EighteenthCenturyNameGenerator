<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('FirstsTableSeeder');
		$this->call('LastsTableSeeder');
		$this->call('NamesTableSeeder');
		$this->call('SuffixesTableSeeder');
		$this->call('TitlesTableSeeder');
	}

}