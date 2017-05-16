<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $basicRole = new Role();
    $basicRole->name         = 'basic';
    $basicRole->display_name = 'Basic profile'; // optional
    $basicRole->description  = 'User is allowed to access records of system with basic profile'; // optional
    $basicRole->save();

    $advancedRole = new Role();
    $advancedRole->name         = 'advanced';
    $advancedRole->display_name = 'Advanced profile'; // optional
    $advancedRole->description  = 'User is allowed to access records of system with advanced profile'; // optional
    $advancedRole->save();

    $managerRole = new Role();
    $managerRole->name         = 'manager';
    $managerRole->display_name = 'Manager profile'; // optional
    $managerRole->description  = 'User is allowed to access records of system with manager profile'; // optional
    $managerRole->save();

    $adminRole = new Role();
    $adminRole->name         = 'admin';
    $adminRole->display_name = 'Administrator profile';
    $adminRole->description  = 'User is allowed to access and manage the all records of system';
    $adminRole->save();
  }
}
