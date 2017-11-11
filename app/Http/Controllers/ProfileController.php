<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;
use App\Profile;


class ProfileController extends Controller
{
 public function GetProfile ()
        {
          return view ('bio.index', array('id'=> Auth::user()->id));
        }

public function Index (Profile $profile)

      {
         return view (' bio.index', $profile);


     } // end of Index


      //  return $profile; // Works

    //  $profiles = Profile::find($id);
    //$profiles = Profile::find($firstname);
   //  $profiles = User::find($id);

      //return view('bio.index', compact('profiles'));


//    return view (' bio.index', ['name' => 'Larcast']); // pass arguments via array
  //  return view (' bio.index')->with('name' , 'Larcast');   //  works
  //    return view (' bio.index', $world);
//}



}   // end of class
