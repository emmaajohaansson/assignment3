<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TvShow extends Model
{
    protected $table = 'tv_shows';

    //Defining a tv-shows relationship with a review
    public function reviews(){
      return $this->hasMany('App\Review');
    }

    //Defining a tv-shows relationship with a streaming service
    public function stores(){
      return $this->belongsToMany('App\StreamingService');
    }
}
