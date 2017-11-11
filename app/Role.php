<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profile;
use App\User;
use Auth;
use Gate;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'permissions',
];
    protected $casts = [
        'permissions' => 'array',
];

  public function users()
{
    return $this->belongsToMany(User::class, 'role_users');
}

public function hasAccess(array $permissions) : bool
{
    foreach ($permissions as $permission) {
        if ($this->hasPermission($permission))
            return true;
    }
    return false;
}

private function hasPermission(string $permission) : bool
{
  //$permissions=json_decode($this->permission,true);
   //$permissions=($this->permission,true);
    return $this->permissions[$permission] ?? false;
}
}
