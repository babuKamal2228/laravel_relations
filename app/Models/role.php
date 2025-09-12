<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $guarded =[];
    //reverse relation
    public function user(){
        return $this->belongsTo(user::class,'id','id');
    }
}
