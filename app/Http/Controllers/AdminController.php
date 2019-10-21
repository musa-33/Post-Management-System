<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin-login');
    }
    public function login(Request $request){

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'user_type'=>'admin'])){
            return redirect('/admin/dashboard');
        }elseif (Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'user_type'=>'editor'])){
            return redirect('/admin/dashboard');
        }else{
            return redirect()->back();
        }

    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function logout(){
        Session::flush();
        return redirect('/admin');
    }
    public function addEditor(){
        return view('admin.add_editor');
    }
    public function saveEditor(Request $request)
    {
        //return $request;
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_type = $request->user_type;
        $user->save();

        return redirect()->back();
    }
}
