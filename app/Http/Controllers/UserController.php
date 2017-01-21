<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Membership;
use Auth;
use finfo;

class UserController extends Controller {
     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show() {
		$memberships = Membership::with(array('team'))->where('user_id', '=', Auth::user()->id)->get();
		return view('profile/profile', ['memberships' => $memberships, 'user' => Auth::user()]);
    }


	public function edit() {
        $memberships = Membership::with(array('team'))->where('user_id', '=', Auth::user()->id)->get();
        return view('profile/edit', ['memberships' => $memberships, 'user' => Auth::user()]);
    }


    public function avatar($id, Request $request){
        $user = User::find($id);

        if(is_null($user->avatar)){
            $fileData = file_get_contents(public_path() . '\images\test-profile@2x.jpg');
            return response()->make($fileData, 200, array(
                'Content-Type' => 'image/jpeg'
            ));
        }

        return response()->make($user->avatar, 200, array(
            'Content-Type' => (new finfo(FILEINFO_MIME))->buffer($user->avatar)
        ));
    }

    public function ajaxUpdate(Request $request) {

        $errorResponse = array('success' => false, 'message' => '');

        if(!Auth::check()){
            $errorResponse['message'] = "Användare ej autentiserad";
            return $errorResponse;
        }

        $newName = $request->get('name');

        if(is_null($newName) || strlen($newName) < 10){
            $errorResponse['message'] = "Namn måste vara mer än 10 tecken";
            return $errorResponse;   
        }

        $user = User::findOrFail(Auth::user()->id);
        $user->name = $newName;

        $user->save();

        return array('success' => true, 'message' => "Bra jobbat!");
    }

    public function ajaxGetTeams(){
        return array('lists' => array(
                'Medlem' => Auth::user()->teams
            ));
    }

    public function jsonUsersByEmail(Request $request){
        $searchStr = "%" . $request->input('email') . "%";
        return User::where('email','like', $searchStr)->get();
    }
}
