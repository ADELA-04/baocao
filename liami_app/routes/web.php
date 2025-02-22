<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/managers/m_user/manager_user', [UserController::class, 'index'])->name('managers.m_user.manager_user');
Route::get('/managers/m_user/add_user', [UserController::class, 'create'])->name('managers.m_user.add_user');
Route::post('/managers/m_user/manager_user', [UserController::class, 'store'])->name('managers.m_user.store_user');

Route::get('/managers/m_user/users/{id}/edit', [UserController::class, 'edit'])->name('managers.m_user.edit_user');
Route::put('/managers/m_user/users/{id}', [UserController::class, 'update'])->name('managers.m_user.update_user_action');
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
Route::get('/products/product_list', function () {
    return view('products.product_list');
})->name('products.product_list');
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

Route::get('/managers/m_product/manager_product', function () {
    return view('managers/m_product/manager_product');
})->name('managers.m_product.manager_product');

Route::get('/managers/m_product/add_product', function () {
    return view('managers/m_product/add_product');
})->name('managers.m_product.add_product');

Route::get('/managers/m_product/update_product', function () {
    return view('managers/m_product/update_product');
})->name('managers.m_product.update_product');

Route::get('/managers/m_category/manager_category', function () {
    return view('managers/m_category/manager_category');
})->name('managers.m_category.manager_category');

Route::get('/managers/m_category/add_category', function () {
    return view('managers/m_category/add_category');
})->name('managers.m_category.add_category');

Route::get('/managers/m_category/update_category', function () {
    return view('managers/m_category/update_category');
})->name('managers.m_category.update_category');


Route::get('/managers/m_blog/manager_blog', function () {
    return view('managers/m_blog/manager_blog');
})->name('managers.m_blog.manager_blog');

Route::get('/managers/m_blog/add_blog', function () {
    return view('managers/m_blog/add_blog');
})->name('managers.m_blog.add_blog');

Route::get('/managers/m_blog/update_blog', function () {
    return view('managers/m_blog/update_blog');
})->name('managers.m_blog.update_blog');


// Route::get('/managers/m_user/manager_user', function () {
//     return view('managers/m_user/manager_user');
// })->name('managers.m_user.manager_user');

Route::get('/managers/m_user/add_user', function () {
    return view('managers/m_user/add_user');
})->name('managers.m_user.add_user');

Route::get('/managers/m_user/update_user', function () {
    return view('managers/m_user/update_user');
})->name('managers.m_user.update_user');

Route::get('/managers/m_user/delete_user', function () {
    return view('managers/m_user/delete_user');
})->name('managers.m_user.delete_user');
