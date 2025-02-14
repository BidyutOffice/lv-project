<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index()
    {
        return view("admin.dashboard");
    }

    public function users()
    {
        return view("admin.users");
    }

    public function products()
    {
        return view("admin.products");
    }
}
