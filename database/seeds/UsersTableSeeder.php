<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $users = [
      [
        'name'     => 'Basic User',
        'email'    => 'basic@shipping.app',
        'password' => bcrypt('secret')
      ],
      [
        'name'     => 'Advanced User',
        'email'    => 'advanced@shipping.app',
        'password' => bcrypt('secret')
      ],
      [
        'name'     => 'Manager',
        'email'    => 'manager@shipping.app',
        'password' => bcrypt('secret')
      ],
      [
        'name'     => 'Administrator',
        'email'    => 'admin@shipping.app',
        'password' => bcrypt('secret')
      ],
    ];
    DB::table('users')->insert($users);
  }
}
