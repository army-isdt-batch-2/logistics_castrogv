<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function distribution()
    {
        return view('distributions');
    }

    public function distribution_create()
    {
        return view('create_form.distribution_c');
    }
}
