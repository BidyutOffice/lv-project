<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientPagesController extends Controller
{
    public function index()
    {
        return view("dashboard");
    }

    public function products()
    {
        return view("products");
    }
}
