<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function asset()
    {
        return view('assets');
    }

    public function asset_create()
    {
        return view('create_form.asset_c');
    }
}

