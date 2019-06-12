<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class video extends Model
{
    protected $table = 'videos';
    public function videos()
    {
        return $this->belongsTo('App\videos');

    }
    protected $fillable = ['video', 'title', 'description'];
    
}
