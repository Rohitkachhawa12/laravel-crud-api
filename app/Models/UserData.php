<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserData extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'user_data';

    // Primary key
    protected $primaryKey = 'user_data_id';

    // Fillable fields
    protected $fillable = [  'full_name','email', 'number','gender','state', 'city', 'password', 'created_by'];

    // Timestamps enabled (Laravel will handle created_at & updated_at automatically)
    public $timestamps = true;

}
