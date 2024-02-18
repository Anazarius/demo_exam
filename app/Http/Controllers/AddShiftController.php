<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddShiftController extends Controller
{
    public function add_shift(Request $request)
    {
        $userData = $request->only('date', 'role');
        $validator = Validator::make($userData, [
            'date' => 'required',
            'role' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/addShifts')
                ->withErrors($validator)
                ->withInput();
        }

        $shift = new Shift();
        $shift->date = $userData['date'];
        $shift->user_id = $userData['role'];

        $shift->save();

        $request->session()->flash('success', 'Успешно!');
        return redirect("/adminShifts");
    }
}
