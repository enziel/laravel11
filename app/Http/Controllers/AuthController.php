<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('modules/auth/login');
    }

    public function registro(){
        return view('modules/auth/registro');
    }

    public function registrar(Request $request){
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = Hash::make($request->password);
        $item->save();
        return redirect()->route('login')->with('status', 'Registro exitoso');
    }

    public function logear(Request $request){
        $credenciales =[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credenciales)){
            return to_route('home');
        }else{
            return to_route('login')->with('status', 'Credenciales incorrectas');
        }
    }

    public function home(){
        return view('modules/dashboard/home');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login');
    }
}
