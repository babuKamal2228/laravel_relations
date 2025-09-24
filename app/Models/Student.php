<?php

namespace App\Models;
use App\Models\Clasess;
use App\Models\Photo;
// use App\Models\Scopes\StudentScope;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;


// #[ScopedBy([StudentScope::class])]

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded =[];


public function classi()
{
    return $this->belongsTo(Clasess::class, 'class_id', 'clasess_id');
}
public function photo()
{
    return $this->hasOne(Photo::class, 'student_id', 'id');
}
    // protected function Name():Attribute{
    //     return Attribute::make(
    //         get:fn(string $value) =>ucwords($value),
    //         set:fn(string $value)=>strlower($value),
    //     );
    // }
    public function getNameAttribute($value){
        // $this->attributes['name'] =ucword($value);
        return ucwords($value);
    }
    // public function scopeActive($query){
    //     return  $query->where('id',1);
    // }
    // protected static function booted():void{
    //     static::addGlobalScope('name',function(Builder $builder){
    //         $builder->where('id',1);
    //     }); scope ke waja se jab bhy hum data get karenge tu wo id 1 wale ke he sirf data laega
}
