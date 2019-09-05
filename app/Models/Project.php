<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['description', 'link', 'github_url', 'user_id', 'status'];
}
