<?php

namespace App;

use Illuminate\Notifications\Notifiable;


class Status
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status_name','desc','comment'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
  *  protected $hidden = [
  *      'password', 'remember_token',
  *  ];
     */
}
