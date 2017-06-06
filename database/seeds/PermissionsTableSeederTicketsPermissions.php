<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionsTableSeederTicketsPermissions extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // tickets
    $ticketIndex = new Permission();
    $ticketIndex->name         = 'ticket-index';
    $ticketIndex->display_name = 'Ticket List';
    $ticketIndex->description  = 'View the ticket List';
    $ticketIndex->save();

    $ticketShow = new Permission();
    $ticketShow->name         = 'ticket-show';
    $ticketShow->display_name = 'Ticket Show';
    $ticketShow->description  = 'View ticket records';
    $ticketShow->save();

    $ticketCreate = new Permission();
    $ticketCreate->name         = 'ticket-create';
    $ticketCreate->display_name = 'Ticket Create';
    $ticketCreate->description  = 'Create new ticket';
    $ticketCreate->save();

    $ticketEdit = new Permission();
    $ticketEdit->name         = 'ticket-edit';
    $ticketEdit->display_name = 'Ticket Edit';
    $ticketEdit->description  = 'Edit ticket records';
    $ticketEdit->save();

    $ticketDelete = new Permission();
    $ticketDelete->name         = 'ticket-delete';
    $ticketDelete->display_name = 'Ticket Delete';
    $ticketDelete->description  = 'Delete ticket records';
    $ticketDelete->save();

    $ticketAdmin = new Permission();
    $ticketAdmin->name         = 'ticket-admin';
    $ticketAdmin->display_name = 'Ticket Admin';
    $ticketAdmin->description  = 'Manage all records and actions of tickets';
    $ticketAdmin->save();
  }
}
