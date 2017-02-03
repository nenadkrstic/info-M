<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name',
        'lname',
        'sity',
        'addres',
        'emil',
        'password',
        'remember_token',
    ];
    public $status = 1;
}
