<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddEmployesController extends Controller
{
    public function add_employee(Request $request)
    {
        $userData = $request->only('name', 'last_name', 'login', 'password', 'role');
        $validator = Validator::make($userData, [
            'name' => 'required',
            'last_name' => 'required',
            'login' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/addEmployes')
                ->withErrors($validator)
                ->withInput();
        }

        $employee = new User();
        $employee->name = $userData['name'];
        $employee->last_name = $userData['last_name'];
        $employee->login = $userData['login'];
        $employee->password = bcrypt($userData['password']);
        $employee->role_id = $userData['role'];

        $employee->save();

        $request->session()->flash('success', 'Успешно!');
        return redirect("/adminEmployes");
    }
}
