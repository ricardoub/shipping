<?php

use Illuminate\Database\Seeder;

use App\Permission;
use App\Role;
use App\User;

class AclSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    /*
     * ROLES
     */
    $basicRole    = Role::where('name', '=', 'basic')->first();
    $advancedRole = Role::where('name', '=', 'advanced')->first();
    $managerRole  = Role::where('name', '=', 'manager')->first();
    $adminRole    = Role::where('name', '=', 'admin')->first();

    /*
     * PERMISSIONS
     */
    // users
    $userPermissionMenu    = Permission::where('name', '=', 'user-menu')->first();
    $userPermissionOwner   = Permission::where('name', '=', 'user-owner')->first();
    $userPermissionIndex   = Permission::where('name', '=', 'user-index')->first();
    $userPermissionShow    = Permission::where('name', '=', 'user-show')->first();
    $userPermissionCreate  = Permission::where('name', '=', 'user-create')->first();
    $userPermissionEdit    = Permission::where('name', '=', 'user-edit')->first();
    $userPermissionDelete  = Permission::where('name', '=', 'user-delete')->first();
    $userPermissionAdmin   = Permission::where('name', '=', 'user-admin')->first();

    /*
     * ACL
     */
    $basicRole->attachPermissions(array(
      $userPermissionMenu, $userPermissionOwner, $userPermissionIndex, $userPermissionShow
    ));

    $advancedRole->attachPermissions(array(
      $userPermissionCreate, $userPermissionEdit
    ));

    $managerRole->attachPermissions(array(
      $userPermissionDelete
    ));

    $adminRole->attachPermissions(array(
      $userPermissionAdmin
    ));

    /*
     * USERS
     */
    $basicUser = User::where('name', '=', 'Basic User')->first();
    $basicUser->roles()->attach($basicRole->id);

    $advancedUser = User::where('name', '=', 'Advanced User')->first();
    $advancedUser->roles()->attach($basicRole->id);
    $advancedUser->roles()->attach($advancedRole->id);

    $managerUser = User::where('name', '=', 'Manager')->first();
    $managerUser->roles()->attach($basicRole->id);
    $managerUser->roles()->attach($advancedRole->id);
    $managerUser->roles()->attach($managerRole->id);

    $adminUser = User::where('name', '=', 'Administrator')->first();
    $adminUser->roles()->attach($basicRole->id);
    $adminUser->roles()->attach($advancedRole->id);
    $adminUser->roles()->attach($managerRole->id);
    $adminUser->roles()->attach($adminRole->id);

  }
}
