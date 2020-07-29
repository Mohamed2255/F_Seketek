<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use File;

class UserController extends Controller
{
    function registerform()
    {
        return view('users.register');
    }
    function handleregister(Request $request)
    {
         $request->validate([
            'username' => 'required|min:5|max:255',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required|min:5',
            'national_id' => 'required',
            'carmodel' => 'required',
            'carnumber' => 'required',
            'location' => 'required',
            'user_image' => 'required',
            'car_image' => 'required',
            'gender' => 'required',
        ]);
        $username = $request->input('username');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password = $request->input('password');
        $national_id = $request->input('national_id');
        $carmodel = $request->input('carmodel');
        $carnumber = $request->input('carnumber');
        $location = $request->input('location');
        ////userimage
        $file=$request->file('user_image');
        $exten=$file->getClientOriginalExtension();
        $newname1=uniqid('',true).'.'.$exten;
        $path='userimages';
        $file->move($path,$newname1);
        ////carimage
        $file=$request->file('car_image');
        $exten=$file->getClientOriginalExtension();
        $newname2=uniqid('',true).'.'.$exten;
        $path='carimages';
        $file->move($path,$newname2);
        $gender = $request->input('gender');
        
        $user=new User();
        $user->username=$username;
        $user->email=$email;
        $user->mobile_number=$phone;
        $user->password=Hash::make($password);
        $user->national_id=$national_id;
        $user->car_model=$carmodel;
        $user->car_number=$carnumber;
        $user->location=$location;
        $user->user_image=$newname1;
        $user->car_image=$newname2;
        $user->gender=$gender;
        $user->gender=$gender;
        $user->save();
        return view('users.login');

    }
    function loginform()
    {
        return view('users.login');
    }
    function handlelogin(Request $request)
    {
        $email=$request->email;
        $password=$request->password;

        if (Auth::attempt(['email' => $email,
        'password' => $password])&& Auth::user()->is_admin==1){
            return redirect('admin/dashboard');
        }
        if (Auth::attempt(['email' => $email,
        'password' => $password])) {
        return redirect('users/profile');
        }
        else
        {
        return redirect('users/login');
        }
    }
    function home()
    {
        $user=User::all();
        return view('admin.dashboard',['users'=>$user]);
    }
    public function show($id){
        $user=User::where('id','=',$id)->first();
        return view('users.show',compact('user'));
    }
    public function profile(User $user){
        return view('users.profile',['user'=>$user]);
    }
    public function edit($user){
        $user=User::where('id','=',$user)->first();
        return view('users.edit',['user'=>$user]);

    }
    function update(Request $request, $user)
    {
        $user=User::where('id','=',$user)->first();
        if ($request->hasFile('user_image')) {
            $file=$request->file('user_image');
            $exten=$file->getClientOriginalExtension();
            $newname1=uniqid('',true).'.'.$exten;
            $path='userimages';
            $file->move($path,$newname1);
            $user->user_image=$newname1;
        }
        if ($request->hasFile('car_image')) {
        $file=$request->file('car_image');
        $exten=$file->getClientOriginalExtension();
        $newname2=uniqid('',true).'.'.$exten;
        $path='carimages';
        $file->move($path,$newname2);
        $user->user_image=$newname2;
        }
        $user->username=$request->username;
        $user->email=$request->email;;
        $user->mobile_number=$request->mobile_number;
        $user->national_id=$request->national_id;
        $user->car_model=$request->car_model;
        $user->car_number=$request->car_number;
        $user->location=$request->location;
        $user->gender=$request->gender;
        $user->save();
        return redirect('admin/dashboard');
    }

    function delete($user)
    {
        $user=User::findOrFail($user);
        $user->delete();
        return redirect()->back();
    }
    function logout()
    {
        Auth::logout();
        return redirect('users/login');
    }
    public function about(){
        return view('users.aboutus');
    }
}
