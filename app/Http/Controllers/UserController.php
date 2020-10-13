<?php

namespace App\Http\Controllers;
use App\User;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function showProfile(Request $request){
        if(!$request->ajax()) return redirect('/');

        $user = User::join('people', 'users.id', '=', 'people.id')
          ->join('roles', 'users.id_role', '=', 'roles.id')
          ->join('occupations', 'people.id_occupation', '=', 'occupations.id')
          ->select('people.id', 'people.name', 'people.surname', 'people.address', 'people.cellphone',
                'people.city', 'people.organization', 'people.age', 'people.sex', 'people.photo',
                'people.id_occupation', 'occupations.name_occupation', 'occupations.description as occupation_description',
                'users.email', 'users.id_role', 'roles.name_role' ,'roles.description as rol_description')
          ->where('people.id', '=', $request->id)->get();

        return ['user' => $user];  
    }

    public function updateInformationPersonal(Request $request){
        if(!$request->ajax()) return redirect('/');

        $user = Person::findOrFail($request->id);

        $user->name = $request->name;
        $user->surname =$request->surname;
        $user->cellphone = $request->cellphone;
        $user->age = $request->age;
        $user->sex = $request->sex;
        $user->save();
    }

    public function updateInformationScholar(Request $request){
        if(!$request->ajax()) return redirect('/');

        $user = Person::findOrFail($request->id);

        $user->id_occupation = $request->id_occupation;
        $user->address =$request->address;
        $user->city = $request->city;
        $user->organization = $request->organization;
        $user->save();
    }

    public function updateInformationPassword(Request $request){
        if(!$request->ajax()) return redirect('/');

        $user = User::findOrFail($request->id);
        
        $passToCheck = $request->password;
        $newPass = $request->new_password;
        $pass = $user->password; 
        $msg = '';

        if (Hash::check($passToCheck, $pass)) {
            // The passwords match
            $user->password = Hash::make($newPass);
            $user->save();
            $msg = 'Good';
        }else{
            $msg = 'Error';
        }

        return ['msg' => $msg];
    }

}
