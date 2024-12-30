<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{
    protected $table = 'students';
    protected $fillable = ['name', 'email', 'password', 'dob', 'age', 'city'];
}