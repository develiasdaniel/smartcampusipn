<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=[
        'name_role','description','state'
    ];

    public function users(){
        return $this->hasMany('App\Users');
    }
}
