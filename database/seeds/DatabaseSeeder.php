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
    $this->call(PermissionsTableSeederUsersPermissions::class);
    $this->call(PermissionsTableSeederTasksPermissions::class);
    $this->call(RolesTableSeeder::class);
    $this->call(UsersTableSeeder::class);
    $this->call(AclSeeder::class);

    $this->call(ButtonsTableSeeder::class);
    $this->call(CombosTableSeeder::class);

    $this->call(TasksTableSeeder::class);
  }
}
