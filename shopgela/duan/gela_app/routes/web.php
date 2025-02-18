<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/products/products_detail', function () {
    return view('products.products_detail');
})->name('products.detail');

Route::get('/acounts/login', function () {
    return view('acounts.login');
})->name('acounts.login');

Route::get('/acounts/forgot_password', function () {
    return view('acounts.forgot_password');
})->name('acounts.forgot_password');

Route::get('/acounts/sign_up', function () {
    return view('acounts.sign_up');
})->name('acounts.sign_up');
Route::get('/admin', function () {
    return view('managers.manager');
})->name('managers.manager');
Route::get('/template_admin', function () {
    return view('layouts/admin_master');
})->name('layouts.admin_master');

Route::get('/products/product_list', function () {
    return view('products/product_list');
})->name('products.product_list');
