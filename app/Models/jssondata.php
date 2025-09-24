<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jssondata extends Model
{
    use HasFactory;
      public $timestamps = false;
      protected $guarded = [];
      protected $casts =['meta_data' => 'json'];

}
