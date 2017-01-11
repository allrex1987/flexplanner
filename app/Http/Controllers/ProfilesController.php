<?php

namespace App\Http\Controllers;

use App\User;

class ProfilesController extends Controller
{
    public function show($id) {
		$user = User::find( $id );
        return $user->role->role_name;
    }
	public function showProfile() {
        return view('profile');
    }
	 public function show2() {
       $characters = [
         'Daenerys Targaryen' => 'Emilia Clarke',
         'Jon Snow'           => 'Kit Harington',
         'Arya Stark'         => 'Maisie Williams',
         'Melisandre'         => 'Carice van Houten',
         'Khal Drogo'         => 'Jason Momoa',
         'Tyrion Lannister'   => 'Peter Dinklage',
         'Ramsay Bolton'      => 'Iwan Rheon',
         'Petyr Baelish'      => 'Aidan Gillen',
         'Brienne of Tarth'   => 'Gwendoline Christie',
         'Lord Varys'         => 'Conleth Hill'
       ];

       return view('welcome')->withCharacters($characters);
    }
}