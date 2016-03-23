<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThesisStudent extends Model
{
    protected $table = 'thesis-students';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'last_name', 'name', 'code', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
