<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function followers(){
        return $this->belongsToMany($this,'user_followers','user_id');
    }
    public function following(){
        return $this->belongsToMany($this,'user_followers','follower_id');
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
