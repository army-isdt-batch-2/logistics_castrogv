<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveriesController extends Controller
{
    public function deliveries()
    {
        return view('deliveries');
    }

    public function deliveries_create()
    {
        return view('create_form.deliveries_c');
    }
}
