<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  protected $fillable = [
    'title', 'body', 'image', 'createt_at', 'updated_at'
  ];
}
