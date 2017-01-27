<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Membership;
use App\Team;
use App\Role;
use Auth;

class TeamController extends Controller {

	public function index(){
		return view('/teams/index', ['teams' => Auth::user()->teams]);
	}

	public function ajaxShow(int $id, Request $request){
		$team = Team::findOrFail($id);

		$user_id = Auth::user()->id;

		$user_role_description = null;

		// //Add user membership to user object
		$users = array();
		foreach ($team->users() as $user) {
			$membershipStatus  = $user->pivot->role_id;
			$role_description = \Config::get('constants.role_descriptions.' . $membershipStatus);
			
			$user->role_description = $role_description;

			if($user_id == $user->id){
				$user_role_description = $role_description;
			}

			array_push($users, $user);
		}

		//dd($team);
		return array(
			'user_role_description' => $user_role_description,
			'team' => $team
		);
		return response()->json(array(
			'user_role_description' => $user_role_description,
			'team' => $team
		), 200, [], JSON_UNESCAPED_UNICODE);
	}

	public function ajaxCreate(Request $request){
		try{

			if(strlen($request->input('team_name')) < 5){
				return array('success' => false, 'message' => 'Fail: team_name');
			}
	        if(strlen($request->input('email')) < 5){
				return array('success' => false, 'message' => 'Fail: email');
			}
	        if(strlen($request->input('phone')) < 5){
				return array('success' => false, 'message' => 'Fail: phone');
			}
	        if(strlen($request->input('address')) < 5){
				return array('success' => false, 'message' => 'Fail: address');
			}

			$team = Team::create(array(
	            'team_name' => $request->input('team_name'),
	            'email' => $request->input('email'),
	            'phone' => $request->input('phone'),
	            'adress' => $request->input('address'),
	        ));

			//Hmm, whats up with this
			$membership = New Membership([
	            'role_id' => Role::ADMIN,
	            'team_id' => $team->id,
	        ]);

	         Auth::user()->memberships()->save($membership);
	         return array('success' => true, 'message' => 'You are a team builder');	         
	     }
	     catch(Exception $e ){
	     	return array('success' => false, 'message' => 'Fail: '. $e->getMessage());
	     }
	}
}