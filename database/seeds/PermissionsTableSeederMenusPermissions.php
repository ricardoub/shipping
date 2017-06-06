<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionsTableSeederMenusPermissions extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // menus nivel 1
    $homeMenu = new Permission();
    $homeMenu->name         = 'home-menu';
    $homeMenu->display_name = 'Home menu';
    $homeMenu->description  = 'Allow to view home menu item';
    $homeMenu->save();

    // serviços
    $serviceMenu = new Permission();
    $serviceMenu->name         = 'service-menu';
    $serviceMenu->display_name = 'Service menu';
    $serviceMenu->description  = 'Allow to view service menu item';
    $serviceMenu->save();
      // tarefas
      $taskMenu = new Permission();
      $taskMenu->name         = 'task-menu';
      $taskMenu->display_name = 'Task menu';
      $taskMenu->description  = 'Allow to view task menu item';
      $taskMenu->save();
      // etiquetas
      $ticketMenu = new Permission();
      $ticketMenu->name         = 'ticket-menu';
      $ticketMenu->display_name = 'Ticket menu';
      $ticketMenu->description  = 'Allow to view ticket menu item';
      $ticketMenu->save();

    // distribuição
    $distribution = new Permission();
    $distribution->name         = 'distribution-menu';
    $distribution->display_name = 'Distribution menu';
    $distribution->description  = 'Allow to view distribution menu item';
    $distribution->save();

    // administração
    $adminMenu = new Permission();
    $adminMenu->name         = 'admin-menu';
    $adminMenu->display_name = 'Admin menu';
    $adminMenu->description  = 'Allow to view admin menu item';
    $adminMenu->save();
      // usuários
      $userMenu = new Permission();
      $userMenu->name         = 'user-menu';
      $userMenu->display_name = 'User menu';
      $userMenu->description  = 'Allow to view User menu item';
      $userMenu->save();

    // profile
    $profileMenu = new Permission();
    $profileMenu->name         = 'profile-menu';
    $profileMenu->display_name = 'Profile menu';
    $profileMenu->description  = 'Allow to view profile menu item';
    $profileMenu->save();

  }
}
