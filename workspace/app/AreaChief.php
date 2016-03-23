<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaChief extends Model
{
    protected $table = 'area-chiefs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idlevel', 'last_name', 'name', 'photo', 'dni', 'key', 'state', 'security',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
