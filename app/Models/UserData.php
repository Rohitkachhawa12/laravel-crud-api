<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens; // ✅ Add this
use Illuminate\Foundation\Auth\User as Authenticatable; // ✅ extend Authenticatable for auth
use Illuminate\Notifications\Notifiable;

class UserData extends Authenticatable
{
    use HasApiTokens, Notifiable; // ✅ Use HasApiTokens here

    protected $table = 'user_data';
    protected $primaryKey = 'user_data_id'; 
    protected $fillable = ['full_name','email','password','number','gender','state','city','created_by',
    ];

    protected $hidden = [
        'password',
    ];
}
