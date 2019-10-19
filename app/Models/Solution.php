<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = ['repository_url', 'link', 'note', 'problem_id', 'user_id'];
}
