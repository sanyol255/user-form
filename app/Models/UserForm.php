<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserForm extends Model
{
    protected $table = 'users';
    protected $fillable = ['firstname', 'lastname', 'email', 'password'];
}
