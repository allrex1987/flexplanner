<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Membership;

class UserController extends Controller {
     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
		
		$memberships = Membership::with(array('role', 'team'))->where('user_id', '=', $id)->get();

		return view('profile', ['memberships' => $memberships]);
    }
	
}
