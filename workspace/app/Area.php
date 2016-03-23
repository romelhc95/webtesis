<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'idcareer',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //Combo Dinamico por id
    public static function areas($id){
        return Area::where('idcareer','=',$id)
            ->get();
    }
}
