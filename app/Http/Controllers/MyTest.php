<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTest extends Controller
{
    //
    public function index(Request $request) {
        $message = "こんにちは";
        return view('index', ['message' => $message]);
    }
}
