<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'main'])->name("main");
Route::get('/admin', [PageController::class, 'admin'])->name("adminList");
Route::get('/adminShifts', [PageController::class, 'admin_shifts'])->name("adminShifts");
Route::get('/adminOrders', [PageController::class, 'admin_orders'])->name("adminOrders");
Route::get('/adminEmployes', [PageController::class, 'admin_employes'])->name("adminEmployes");
Route::get('/addShifts', [PageController::class, 'add_shifts'])->name("addShifts");
Route::get('/addEmployes', [PageController::class, 'add_employes'])->name("addEmployes");
Route::get('/chefOrders', [PageController::class, 'chef_orders'])->name("chefOrders");
Route::get('/waiterOrders', [PageController::class, 'waiter_orders'])->name("waiterOrders");
Route::get('/addOrders', [PageController::class, 'add_orders'])->name("addOrders");

Route::post('/admin', [PageController::class, 'admin'])->name("admin");
