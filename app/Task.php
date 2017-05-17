<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Task extends Model
{
  protected $fillable = ['name', 'priority', 'percent', 'status', 'user_id'];

  public function owner()
  {
    Return $this->belongsTo(User::class);
  }

}
