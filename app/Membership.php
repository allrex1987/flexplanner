<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Membership extends Model
{
	function role() {
	   return $this->belongsTo('App\Role');
	}

	function user() {
	   return $this->belongsTo('App\User');
	}

	function team() {
	   return $this->belongsTo('App\Team');
	}
	
	//BelongsToMany belongsToMany(string $related, string $table = null, string $foreignKey = null, string $otherKey = null, string $relation = null)
}