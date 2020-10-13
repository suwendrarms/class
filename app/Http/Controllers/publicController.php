<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    public function index()
    {
        return view('work');
    }

    public function teacher()
    {
        return view('physician');
    }

    public function covid()
    {
        return view('corona');
    }

}
