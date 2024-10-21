<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
}
