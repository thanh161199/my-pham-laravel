<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('siteAdmin.dashboard');
        // echo '<h1>Admin page</h1>';
    }
}
