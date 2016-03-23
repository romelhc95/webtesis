<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    protected $table = 'lines';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'idarea',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    
    //Combo Dinamico por id
    public static function lines($id){
        return Line::where('idarea','=',$id)
            ->get();
    }
}
