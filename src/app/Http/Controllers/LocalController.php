<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalController extends Controller
{

    public function index(Request $request)
    {

        $phrase = $request->phrase;

        return view('index', compact('phrase'));
    }
}
