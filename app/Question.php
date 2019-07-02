<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'order', 'chapter_id'
    ];

    public function chapter()
    {
        return $this->belongsTo('App\Chapter');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
