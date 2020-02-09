<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name','salary','email','image','phno','dob','password'];
    protected $table = 'employee';
}
