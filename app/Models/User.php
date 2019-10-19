<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'github_id',
        'remember_token'
    ];


    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }

    public function solutions()
    {
        return $this->hasMany('App\Models\Solution');
    }

    public function createToken(){
        $token = bin2hex(openssl_random_pseudo_bytes(16));
        $this->where('id', $this->id)->update(['remember_token' => $token]);
        return $token;
    }

}
