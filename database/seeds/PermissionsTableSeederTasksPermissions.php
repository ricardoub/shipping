<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionsTableSeederTasksPermissions extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // tasks
    $taskIndex = new Permission();
    $taskIndex->name         = 'task-index';
    $taskIndex->display_name = 'Task List';
    $taskIndex->description  = 'View the task List';
    $taskIndex->save();

    $taskShow = new Permission();
    $taskShow->name         = 'task-show';
    $taskShow->display_name = 'Task Show';
    $taskShow->description  = 'View task records';
    $taskShow->save();

    $taskCreate = new Permission();
    $taskCreate->name         = 'task-create';
    $taskCreate->display_name = 'Task Create';
    $taskCreate->description  = 'Create new task';
    $taskCreate->save();

    $taskEdit = new Permission();
    $taskEdit->name         = 'task-edit';
    $taskEdit->display_name = 'Task Edit';
    $taskEdit->description  = 'Edit task records';
    $taskEdit->save();

    $taskDelete = new Permission();
    $taskDelete->name         = 'task-delete';
    $taskDelete->display_name = 'Task Delete';
    $taskDelete->description  = 'Delete task records';
    $taskDelete->save();

    $taskOwner = new Permission();
    $taskOwner->name         = 'task-owner';
    $taskOwner->display_name = 'Task owner';
    $taskOwner->description  = 'Change own task record';
    $taskOwner->save();

    $taskAdmin = new Permission();
    $taskAdmin->name         = 'task-admin';
    $taskAdmin->display_name = 'Task Admin';
    $taskAdmin->description  = 'Manage all records and actions of tasks';
    $taskAdmin->save();
  }
}
