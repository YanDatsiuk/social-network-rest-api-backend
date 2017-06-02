<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->call(\TMPHP\RestApiGenerators\Database\Seeds\AuthActionsTableSeeder::class);
		$this->call(\TMPHP\RestApiGenerators\Database\Seeds\AuthGroupsTableSeeder::class);
		$this->call(\TMPHP\RestApiGenerators\Database\Seeds\AuthActionGroupsTableSeeder::class);
		$this->call(\TMPHP\RestApiGenerators\Database\Seeds\AuthGroupUsersTableSeeder::class);

    }
}
