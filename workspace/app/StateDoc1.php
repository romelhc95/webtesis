<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StateDoc1 extends Model
{
    protected $table = 'state-doc1s';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
