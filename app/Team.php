<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	function memberships() {
	   return $this->hasMany('App\Membership');
	}
}