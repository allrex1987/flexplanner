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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	
	function memberships() {
	   return $this->hasMany('App\Membership');
	}
	
	function roles() {
	   return $this->belongsToMany('App\Role', 'memberships');
	}
	
	function teams() {
	   return $this->belongsToMany('App\Team', 'memberships');
	}
}
