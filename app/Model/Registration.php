<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable=['name','email','username','password','date_of_birth','mobile','designation'];
}
