<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StationController extends Controller
{
    
    public function listStations(){
        $stations = DB::table('station as s')
            ->select('id_station',
                'name',
                'latitud as latitude',
                'longitud as longitude',
                'location',
                'description',
                'zone')
            ->where('state',true)
            ->get();
        return ["stations"=>$stations];
    }
}
