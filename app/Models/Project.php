<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['description', 'link', 'github_url', 'user_id', 'status'];

    public function tags()
    {
        return $this->hasMany('App\Models\Tag');
    }

    public function codings()
    {
        return $this->hasMany('App\Models\Coding');
    }

    public function problems()
    {
        return $this->hasMany('App\Models\Problem');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }
}
