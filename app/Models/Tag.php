<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['project_id', 'name'];

    public function projects()
    {
        return $this->belongsToMany('App\Models\Project');
    }
}
