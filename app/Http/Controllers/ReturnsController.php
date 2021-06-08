<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnsController extends Controller
{
    public function returns()
    {
        return view('returns');
    }

    public function returns_create()
    {
        return view('create_form.returns_c');
    }
}
