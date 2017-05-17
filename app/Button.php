<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Button extends Model
{

  protected $fillable = ['code', 'name', 'link', 'icon', 'class'];

  /**
   * Display a listing of the options in html select format.
   *
   * @return Array
   */

}
