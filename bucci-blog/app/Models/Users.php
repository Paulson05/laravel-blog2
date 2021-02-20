<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthContract;
class Users extends Model implements AuthContract
{
    use HasFactory, Authenticatable;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',

    ];
}
