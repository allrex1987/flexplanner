<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Membership;
use Auth;

class UserController extends Controller {
     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show() {
		$memberships = Membership::with(array('role', 'team'))->where('user_id', '=', 
            $user = Auth::user()->id)->get();
		return view('profile', ['memberships' => $memberships, 'user' => Auth::user()]);
    }
	
}
