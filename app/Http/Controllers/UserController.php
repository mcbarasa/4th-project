<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return redirect('showUsers');
    }
    public function showUsers()
    {
        $users = User::all();
        
        return view('admin.user', compact('users'));

    }
}
