<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        //dd(Auth::user()->name, Auth::id(), Auth::check());
        return view('admin.dashboard');
    }
}
