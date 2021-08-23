<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        is_permitted('Dashboard');
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));
    }
}
