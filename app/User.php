<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Profile;
use App\Role;
use Business\Models\company;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'username','password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

   public function profiles_U()
{

        return $this->belongsToMany(Profile::class, 'profiles_users');
}

public function profiles()
{

     return $this->belongsToMany(Profile::class, 'profiles');
}

public function profile_types()
{

     return $this->belongsToMany(Profile::class, 'profiles_types');
}
  public function roles()
     {
         return $this->belongsToMany(Role::class, 'role_users');
     }

     /**
      * Checks if User has access to $permissions.
      */
     public function hasAccess(array $permissions) : bool
     {
         // check if the permission is available in any role
         foreach ($this->roles as $role) {
             if($role->hasAccess($permissions)) {
                 return true;
             }
         }
         return false;
     }
    /**
     * Checks if the user belongs to role.
     */
    public function inRole(string $roleSlug)
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }
}
