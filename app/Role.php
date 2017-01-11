<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	function memberships() {
	   return $this->hasMany('App\Membership');
	}
}