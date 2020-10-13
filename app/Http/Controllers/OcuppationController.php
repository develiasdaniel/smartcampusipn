<?php

namespace App\Http\Controllers;
use App\Occupation;
use Illuminate\Http\Request;

class OcuppationController extends Controller
{
    public function selectOccupation(Request $request){
        if(!$request->ajax()) return redirect('/');
        
        $occupations = Occupation::where('state', '=', '1')
         ->select('id','name_occupation', 'description')
         ->orderBy('id', 'asc')->get();

         return ['occupations' => $occupations];
    }
}
