<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'copy', 'problem', 'solution', 'todo', 'link', 'github_url', 'user_id', 'status'];

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
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

    public function images()
    {
        return $this->hasMany('App\Models\ProjectImage');
    }

    public function creator()
    {
        return $this->belongsTo('App\Models\User');
    }
}
