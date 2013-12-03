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

		// $this->call('UserTableSeeder');
		$this->call('AdminsTableSeeder');
		$this->call('PoisTableSeeder');
		$this->call('MediaTableSeeder');
		$this->call('BadgesTableSeeder');
	}

}