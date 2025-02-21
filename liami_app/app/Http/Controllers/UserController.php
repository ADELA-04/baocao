<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('managers.m_user.manager_user', compact('users')); // Truyền dữ liệu vào view
    }
}
