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
    public function tokens(){
        return $this->hasMany(PasswordResetToken::class,'user_id');
    }
    public function hasToken($token){
        return (bool)$this->tokens()->where('token',$token)->count();
    }
    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
}
