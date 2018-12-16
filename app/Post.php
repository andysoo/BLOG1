<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Carbon;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'published_at', 'author_id'];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
