<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function goToRegister()
    {
        return view('register/register_page');
    }
    public function register(Request $request)
    {
        //validar datos
        //creamos el usuario con su respectivo modelo
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);
        return redirect(route('home_page'));
    }

    public function login(Request $request){
        $credentials=[
            "email"=> $request->email,
            "password" => $request->password,
        ];
        $remember = ($request-> has('remenber') ? true : false);
        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect('home');
        }else{
            return redirect('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('home_page'));
    }
}
