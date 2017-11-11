<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
Use App\Role;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{


    use RegistersUsers;

  //    protected $redirectTo = '/home';
        protected $redirectTo = '/';
    //protected $save_profile = profile;

    public function __construct()
    {
        $this->middleware('guest');
    }

public function showRegistrationForm()
{
    $roles = Role::orderBy('name')->pluck('name', 'id');
    return view('auth.register', compact('roles'));
}

    protected function validator(array $data)
    {
//dd($data); Pass information ok from form

        return Validator::make($data, [
         'username' => 'required|string|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
          'firstname' => 'required|string|max:255',
          'lastname' => 'required|string|max:255',
          'nickname' => 'string|max:255',
          'middlename' => 'string|max:255',
          'role' => 'required|exists:roles,id', // validating role



        ]);
  //      dd('validator done');
    }

protected function create(array $data)
{
    $user = User::create([
        'username' => $data['username'],
      //  'email' => $data['email'],
        'password' => bcrypt($data['password']),
    ]);

     $profile = Profile::create([          // this works now sava profile information

    'firstname' => $data['firstname'],
     'lastname' => $data['lastname'],
     'nickname' => $data['nickname'],
     'middlename' => $data['middlename'],

    ]);
      $profile_type = 'user';
      $user->profile_types()->attach($profile['profile_type']);
      $user->roles()->attach($data['role']); // Key to link role_users table; works
      $user->profiles_U()->attach($profile['id']); // Key to link profile_users table
    return $user;
    return $profile;

}    // saves data users, roles, profiles tables, works fine

}
