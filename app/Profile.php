<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
use App\Role;

class Profile extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'firstname','lastname','nickname' ,'middlename'
    ];

  public function users()
  {
        //  return $this->belongsToMany(User::class,'profiles_users');
          return $this->belongsTo(User::class);
             }

public function types()
    {

        return $this->belongsToMany(Profile::class, 'profiles_types');

      }

public function GetProfileId () {

//  $profile = Profile::find($id);
    //return view ('bio.index', compact('profile'));
    }


}
