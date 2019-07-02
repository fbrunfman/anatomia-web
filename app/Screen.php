<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'image_url', 'chapter_id', 'order'
    ];

    public function chapter()
    {
        return $this->belongsTo('App\Chapter');
    }
}
