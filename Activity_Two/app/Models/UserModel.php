<?php

namespace App\Models\UserModel;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model{
    
    protected $fillable = [
        'username', 'password',
    ];
    
}