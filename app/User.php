<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $fillable =['email', 'name', 'password',];

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
