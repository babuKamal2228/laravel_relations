<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class StudentScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    // public function apply(Builder $builder, Model $model)
    // {
    //          if (request()->has('student_id')) {
    //         $builder->where('id', request('student_id'));
    // }
//     protected static function booted()
// {
//     static::addGlobalScope(new StudentScope(1)); // yahan pe dynamic value pass kar sakte ho
// }

}
