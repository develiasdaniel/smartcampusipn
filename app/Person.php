<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'name','surname','id_occupation','address',
        'cellphone','city','organization','age',
        'sex','photo'
    ];

    public function user(){
        return $this->hasOne('App\User');
    }

}
