<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'careers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'idfaculty',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //Combo Dinamico por id
    public static function careers($id){
        return Career::where('idfaculty','=',$id)
            ->get();
    }
}
