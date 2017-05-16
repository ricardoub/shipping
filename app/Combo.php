<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Combo extends Model
{
  protected $fillable = ['name', 'value', 'option'];

  /**
   * Display a listing of the users in html select format.
   *
   * @return Array
   */
  public function usersForSelect()
  {
    return User::pluck('name', 'id')->all();
  }

  /**
   * Display a listing of the options in html select format.
   *
   * @return Array
   */
  public function optionsForSelect($combo)
  {
    $options = Combo::where('name', '=', $combo)->get();
    return $options->pluck('option', 'value');
  }
}
