<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Student extends User
{
    protected $fillable = [

        "name",
        "username",
        "email",
        "phone",
        "address",
        "skill",
        "photo",
        "password",
    ];
}
