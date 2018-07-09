<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
  protected $fillable = [
    'msg', 'user_id', 'to_user_id'
  ];
  public function user()
  {
    return $this->belongsTo('App\Chat');
  }
}
