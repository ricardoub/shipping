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
    $roleBasic    = Role::where('name', '=', 'basic')->first();
    $roleAdvanced = Role::where('name', '=', 'advanced')->first();
    $roleManager  = Role::where('name', '=', 'manager')->first();
    $roleAdmin    = Role::where('name', '=', 'admin')->first();

    /*
     * PERMISSIONS
     */
    // menus
    $menuHome         = Permission::where('name', '=', 'home-menu')->first();
    $menuService      = Permission::where('name', '=', 'service-menu')->first();
      $menuTask       = Permission::where('name', '=', 'task-menu')->first();
      $menuTicket     = Permission::where('name', '=', 'ticket-menu')->first();

    $menuDistribution = Permission::where('name', '=', 'distribution-menu')->first();

    $menuAdmin        = Permission::where('name', '=', 'admin-menu')->first();
      $menuUser       = Permission::where('name', '=', 'user-menu')->first();

    $menuProfile      = Permission::where('name', '=', 'profile-menu')->first();

    // tickets
    $ticketIndex    = Permission::where('name', '=', 'ticket-index')->first();
    $ticketShow     = Permission::where('name', '=', 'ticket-show')->first();
    $ticketCreate   = Permission::where('name', '=', 'ticket-create')->first();
    $ticketEdit     = Permission::where('name', '=', 'ticket-edit')->first();
    $ticketOwner    = Permission::where('name', '=', 'ticket-owner')->first();
    $ticketDelete   = Permission::where('name', '=', 'ticket-delete')->first();
    $ticketAdmin    = Permission::where('name', '=', 'ticket-admin')->first();
    // tasks
    $taskIndex      = Permission::where('name', '=', 'task-index')->first();
    $taskShow       = Permission::where('name', '=', 'task-show')->first();
    $taskCreate     = Permission::where('name', '=', 'task-create')->first();
    $taskEdit       = Permission::where('name', '=', 'task-edit')->first();
    $taskOwner      = Permission::where('name', '=', 'task-owner')->first();
    $taskDelete     = Permission::where('name', '=', 'task-delete')->first();
    $taskAdmin      = Permission::where('name', '=', 'task-admin')->first();
    // users
    $userProfile    = Permission::where('name', '=', 'user-prfle')->first();
    $userIndex      = Permission::where('name', '=', 'user-index')->first();
    $userShow       = Permission::where('name', '=', 'user-show')->first();
    $userCreate     = Permission::where('name', '=', 'user-create')->first();
    $userEdit       = Permission::where('name', '=', 'user-edit')->first();
    $userDelete     = Permission::where('name', '=', 'user-delete')->first();
    $userAdmin      = Permission::where('name', '=', 'user-admin')->first();

    /*
     * ACL
     */
    // #1, #2
    $roleBasic->attachPermissions(array(
      $userProfile,
      $userIndex,   $userShow,
      $taskIndex,   $taskShow,   $taskCreate,   $taskEdit,
      $ticketIndex, $ticketShow, $ticketCreate
    ));
    // #2, #3
    $roleAdvanced->attachPermissions(array(
      $userProfile,
      $userIndex,   $userShow,   $userCreate,   $userEdit,
      $taskIndex,   $taskShow,   $taskCreate,   $taskEdit, $taskOwner,
      $ticketIndex, $ticketShow, $ticketCreate, $ticketEdit
    ));
    // #3, #4
    $roleManager->attachPermissions(array(
      $userProfile,
      $userIndex,   $userShow,   $userCreate,   $userEdit,
      $taskIndex,   $taskShow,   $taskCreate,   $taskEdit,   $taskOwner,
      $ticketIndex, $ticketShow, $ticketCreate, $ticketEdit,
      $userDelete,  $taskDelete, $ticketDelete
    ));
    // #5
    $roleAdmin->attachPermissions(array(
      $userProfile,
      $userIndex,   $userShow,   $userCreate,   $userEdit,
      $taskIndex,   $taskShow,   $taskCreate,   $taskEdit,   $taskOwner,
      $ticketIndex, $ticketShow, $ticketCreate, $ticketEdit,
      $userDelete,  $taskDelete, $ticketDelete,
      $userAdmin,   $taskAdmin,  $ticketAdmin
    ));

    // menus
    $roleBasic->attachPermissions(array(
      $menuHome,         $menuProfile,
      $menuService,      $menuTask,    $menuTicket,
    ));
    $roleAdvanced->attachPermissions(array(
      $menuHome,         $menuProfile,
      $menuService,      $menuTask,    $menuTicket,
      $menuDistribution
    ));
    $roleAdmin->attachPermissions(array(
      $menuHome,         $menuProfile,
      $menuService,      $menuTask,    $menuTicket,
      $menuDistribution,
      $menuAdmin,        $menuUser
    ));

    /*
     * USERS PROFILE
     */
    $profileBasic = User::where('name', '=', 'Basic User')->first();
    $profileBasic->roles()->attach($roleBasic->id);

    $profileAdvanced = User::where('name', '=', 'Advanced User')->first();
    $profileAdvanced->roles()->attach($roleBasic->id);

    $profileManager = User::where('name', '=', 'Manager')->first();
    $profileManager->roles()->attach($roleManager->id);

    $profileAdmin = User::where('name', '=', 'Administrator')->first();
    $profileAdmin->roles()->attach($roleAdmin->id);

  }
}
