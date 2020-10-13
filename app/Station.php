<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table = 'station';

    protected $fillable = [
        'id_station','name','location','latitud',
        'longitud','description','zone','state'
    ];

}
