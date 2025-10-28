<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Staff extends User
{
    protected $fillable = [

        "name",
        "username",
        "email",
        "phone",
        "address",
        "role",
        "photo",
        "password",
    ];
}
