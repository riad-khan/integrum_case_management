<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
   public function index(){
        return view('Admin.User.profile-update');
   }
   public function store(Request $request){

   
    

    $data = [];
    $data['first_name'] = $request->fname;
    $data['last_name'] = $request->lname;
    $data['date_of_birth'] = $request->dob;
    $data['language'] = $request->language;
    $data['website'] = $request->website;
    $data['phone_number'] = $request->phone;
    $data['email'] = $request->email;

    if($request->password){
        $data['password'] = Hash::make($request->password);
    }

    $update_profile = DB::table('users')->where('id','=',Auth::user()->id)->update($data);

    return redirect()->to('/dashboard');

   }
}
