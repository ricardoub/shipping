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
    $userPermissionMenu    = Permission::where('name', '=', 'user-menu')->first();    //user#1
    $userPermissionProfile = Permission::where('name', '=', 'user-profile')->first(); //user#2
    $userPermissionIndex   = Permission::where('name', '=', 'user-index')->first();   //user#2
    $userPermissionShow    = Permission::where('name', '=', 'user-show')->first();    //user#2
    $userPermissionCreate  = Permission::where('name', '=', 'user-create')->first();  //user#3
    $userPermissionEdit    = Permission::where('name', '=', 'user-edit')->first();    //user#3
    $userPermissionDelete  = Permission::where('name', '=', 'user-delete')->first();  //user#4
    $userPermissionAdmin   = Permission::where('name', '=', 'user-admin')->first();   //user#5
    // tasks
    $taskPermissionMenu    = Permission::where('name', '=', 'task-menu')->first();    //task#1
    $taskPermissionIndex   = Permission::where('name', '=', 'task-index')->first();   //task#2
    $taskPermissionShow    = Permission::where('name', '=', 'task-show')->first();    //task#2
    $taskPermissionCreate  = Permission::where('name', '=', 'task-create')->first();  //task#2
    $taskPermissionEdit    = Permission::where('name', '=', 'task-edit')->first();    //task#2
    $taskPermissionOwner   = Permission::where('name', '=', 'task-owner')->first();   //task#3
    $taskPermissionDelete  = Permission::where('name', '=', 'task-delete')->first();  //task#4
    $taskPermissionAdmin   = Permission::where('name', '=', 'task-admin')->first();   //task#5

    /*
     * ACL
     */
    // #1, #2
    $basicRole->attachPermissions(array(
      $userPermissionProfile,
      $userPermissionMenu, $userPermissionIndex, $userPermissionShow,
      $taskPermissionMenu, $taskPermissionIndex, $taskPermissionShow,
      $taskPermissionCreate, $taskPermissionEdit
    ));
    // #2, #3
    $advancedRole->attachPermissions(array(
      $userPermissionCreate, $userPermissionEdit,
      $taskPermissionOwner
    ));
    // #3, #4
    $managerRole->attachPermissions(array(
      $userPermissionDelete,
      $taskPermissionDelete
    ));
    // #5
    $adminRole->attachPermissions(array(
      $userPermissionAdmin,
      $taskPermissionAdmin
    ));

    /*
     * USERS PROFILE
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
