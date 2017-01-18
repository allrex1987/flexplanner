<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\ActivationService;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $activationService;
    protected $redirectTo = '/home';

    public function __construct(ActivationService $activationService)  
    {
        $this->middleware('guest');
        $this->activationService = $activationService;
    }

    protected function validator(array $data) 
    {
        
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function register(Request $request) 
    {  
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }

        $user = $this->create($request->all());

        $this->activationService->sendActivationMail($user);

        return redirect('/login')->with('status', \Config::get('constants.activation_sent'));
    }

    public function authenticated(Request $request, $user) {
       
        if (!$user->activated) {
           $this->activationService->sendActivationMail($user);
           auth()->logout();
           return back()->with('warning', \Config::get('constants.activation_unverified'));
         }

        return redirect()->intended($this->redirectPath());
    }

}
