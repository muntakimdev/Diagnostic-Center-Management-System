<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        // Only admins can access this page
        if (!Auth::check() || Auth::user()->usertype == '0') {
            return redirect('/home');
        }

        // Taking all users but i will filter using the roles, which are given through database
        $users = User::all();

        return view('admin.users', compact('users'));
    }
}