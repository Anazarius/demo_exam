<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main() {
        return view('main');
    }
    public function admin() {
        return view('adminList');
    }
    public function admin_shifts() {
        return view('adminShifts');
    }
    public function admin_orders() {
        return view('adminOrders');
    }
    public function admin_employes() {
        return view('adminEmployes');
    }
    public function add_shifts() {
        return view('addShifts');
    }
    public function add_employes() {
        return view('addEmployes');
    }
    public function chef_orders() {
        return view('chefOrders');
    }
    public function waiter_orders() {
        return view('waiterOrders');
    }
    public function add_orders() {
        return view('addOrders');
    }
}
