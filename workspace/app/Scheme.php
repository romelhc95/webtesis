<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    protected $table = 'schemes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'schema_description',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
