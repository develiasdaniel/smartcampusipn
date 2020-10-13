<?php

namespace App\Http\Controllers;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request){
        if(!$request->ajax()) return redirect('/');

        $search = $request->search;
        $criteria = $request->criteria;

        if($search == ''){
            $roles = Role::orderBy('id','desc')->paginate(5);
        }
        else{
            $roles = Role::where( $criteria, 'like', '%'.$search.'%')->orderBy('id','desc')->paginate(5);
        }

        return [
            'pagination' => [
                'total' => $roles->total(),
                'current_page' => $roles->currentPage(),
                'per_page' => $roles->perPage(),
                'last_page' => $roles->lastPage(),
                'from' => $roles->firstItem(),
                'to' => $roles->lastItem()
            ],
            'roles' => $roles
        ];
    }



}
