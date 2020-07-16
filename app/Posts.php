<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  protected $fillable = [
    'title', 'body', 'image', 'createt_at', 'updated_at', 'category_id'
  ];

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  // public function tags()
  // {
  //     // return $this->hasMany(Tag::class);
  //     return $this->belongsToMany(Tag::class);
  // }

  public function tags()
  {
      return $this->belongsToMany(Tag::class);
  }
  
}
