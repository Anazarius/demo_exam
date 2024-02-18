<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function auth(Request $request) {
        $userData = $request->only('login', 'password');

        $validator = Validator::make($userData, [
            'login'=> 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }
        if (Auth::attempt($userData)){
            if (Auth::user()->role_id == 1) {
                $request->session()->flash('success', 'Успешно!');
                return redirect('/admin');
            }
            else if (Auth::user()->role_id == 2) {
                $request->session()->flash('success', 'Успешно!');
                return redirect('/waiterOrders');
            }
            else {
                $request->session()->flash('success', 'Успешно!');
                return redirect('/chefOrders');
            }
        }
        else return redirect('/');
    }
}
