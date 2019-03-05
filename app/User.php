<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // public $table = "users";
    // protected $fillable = [
    //     'name', 'email', 'password', 'group_id' ,'api_token'
    // ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     protected $hidden = [
        'password', 'remember_token',
    ];

     public function permission(){
        return $this->belongsToMany('App\Model\Permission' , 'permission_user');
    }
     public function role(){
        return $this->belongsToMany('App\Model\Role' , 'role_user');
    }
     public function group(){
        return $this->belongsTo('App\Model\Group');
    }    
}
