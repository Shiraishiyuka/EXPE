<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdovanceController extends Controller
{
    public function up()
    {
        return view('loyat.parent');
    }

    public function index()
    {
        return view('home');
    }
}
