<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Role;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function main() {
        return view('main');
    }
    public function admin() {
        return view('adminList');
    }
    public function admin_shifts() {
        $shifts = Shift::all();
        $users = User::all();
        return view('adminShifts', compact('shifts', 'users'));
    }
    public function admin_orders() {
        $orders = Order::all();
        return view('adminOrders', compact('orders'));
    }
    public function admin_employes() {
        $users = User::all();
        $currentUser = Auth::user();
        $role = Role::where('id', $currentUser->role_id)->first();
        return view('adminEmployes', compact('users', 'role'));
    }
    public function add_shifts() {
        $users = User::all();
        return view('addShifts', compact('users'));
    }
    public function add_employes() {
        $roles = Role::all();
        return view('addEmployes', compact('roles'));
    }
    public function chef_orders() {
        $orders = Order::all();
        return view('chefOrders', compact('orders'));
    }
    public function waiter_orders() {
        $orders = Order::all();
        return view('waiterOrders', compact('orders'));
    }
    public function add_orders() {
        return view('addOrders');
    }
    public function logout() {
        Auth::logout();
        return view('main');
    }
}
