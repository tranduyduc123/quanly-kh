<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\orderController;

Route::get('/', function () {
    return view('welcome');
});


route::get('user', [UserController::class, 'index']);
route::post('user', [UserController::class, 'AddCustomer'])->name('AddCustomer.store');
route::get('edit-khachhang/{id}', [UserController::class, 'editCustomer'])->name('Customer.edit');
route::post('update-khachhang/{id}', [UserController::class, 'updateCustomer'])->name('Customer.update');
route::get('delete-khachhang/{id}', [UserController::class, 'deleteCustomer'])->name('Customer.delete');

route::get('user', [orderController::class, 'index']);

