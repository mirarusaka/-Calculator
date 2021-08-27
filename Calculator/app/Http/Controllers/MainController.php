<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MathController;
use App\Http\Controllers\NumberController;

class MainController extends Controller //ページの移動など、メイン動作のみ
{
    public function index() //トップページ
    {
        return view('index');
    }

    public function main() //計算機メイン画面
    {
        $number = null;

        return view('main', ['number' => $number]);
    }
}
