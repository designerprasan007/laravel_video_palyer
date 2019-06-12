<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticekt extends Model
{
    protected $fillable = ['user_id', 'title', 'description'];

}
