<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $fillable = [
        'team_name', 'email', 'phone', 'adress'
    ];
    

	function memberships() {
	   //return $this->hasMany('App\User', 'memberships');
		//return $this->hasManyThrough('App\User', 'App\Membership');
		//return $this->belongsToMany('App\User', 'memberships');
	}

	function users(){
		return $this->belongsToMany('App\User', 'memberships')->withPivot('role_id');
	}
}
