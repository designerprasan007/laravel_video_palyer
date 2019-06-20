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
    protected $fillable = ['video', 'title', 'description','comment'];
    public function updatevideos($data)
{
        $video = $this->find($data['id']);
        $video->video = $data['video'];
        $video->title = $data['title'];
        $video->description = $data['description'];
        $video->comment = $data['comment'];

        $video->save();
        return 1;
}
}
