<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
	protected $fillable = [
        'role_id', 'team_id'
    ];
    
	function user() {
	   return $this->belongsTo('App\User');
	}

	function team() {
	   return $this->belongsTo('App\Team');
	}
	
	//BelongsToMany belongsToMany(string $related, string $table = null, string $foreignKey = null, string $otherKey = null, string $relation = null)
}