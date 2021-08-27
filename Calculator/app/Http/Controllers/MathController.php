<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller //計算用
{
    public function all_clear($number)
    {
        $number = null;

        return view('main', ['number' => $number]);
    }
}
