<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $number = 0;

        return view('index');
    }

    public function main()
    {
        $number = 0;

        return view('main', ['number' => $number]);
    }
}
