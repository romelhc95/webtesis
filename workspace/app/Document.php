<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'date', 'thesis', 'state', 'observation', 'idthesis_student', 'idchief', 'idreviser', 'idscheme', 'idfaculty', 'idcareer', 'idarea', 'idline',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
