<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // users
    $userMenu = new Permission();
    $userMenu->name         = 'user-menu';
    $userMenu->display_name = 'User menu';
    $userMenu->description  = 'Allow to view User menu item';
    $userMenu->save();

    $userIndex = new Permission();
    $userIndex->name         = 'user-index';
    $userIndex->display_name = 'User List';
    $userIndex->description  = 'View the User List';
    $userIndex->save();

    $userShow = new Permission();
    $userShow->name         = 'user-show';
    $userShow->display_name = 'User Show';
    $userShow->description  = 'View user records';
    $userShow->save();

    $userCreate = new Permission();
    $userCreate->name         = 'user-create';
    $userCreate->display_name = 'User Create';
    $userCreate->description  = 'Create new user';
    $userCreate->save();

    $userEdit = new Permission();
    $userEdit->name         = 'user-edit';
    $userEdit->display_name = 'User Edit';
    $userEdit->description  = 'Edit user records';
    $userEdit->save();

    $userDelete = new Permission();
    $userDelete->name         = 'user-delete';
    $userDelete->display_name = 'User Delete';
    $userDelete->description  = 'Delete user records';
    $userDelete->save();

    $userProfile = new Permission();
    $userProfile->name         = 'user-profile';
    $userProfile->display_name = 'User Profile';
    $userProfile->description  = 'Change own user record';
    $userProfile->save();

    $userAdmin = new Permission();
    $userAdmin->name         = 'user-admin';
    $userAdmin->display_name = 'User Admin';
    $userAdmin->description  = 'Manage all records and actions of users';
    $userAdmin->save();
  }
}
