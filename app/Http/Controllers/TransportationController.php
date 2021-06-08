<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportationController extends Controller
{
    public function transportation()
    {
        return view('transportations');
    }

    public function transportation_create()
    {
        return view('create_form.transportation_c');
    }
}
