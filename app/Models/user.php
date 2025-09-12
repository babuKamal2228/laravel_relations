<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function roles(){
        // return $this->hasOne(role::class,'user_id','id');
        return $this->hasMany(role::class,'user_id','id');

    }
}
