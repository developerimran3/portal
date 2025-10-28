<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
