<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportation;
use Redirect;

class TransportationController extends Controller
{
    protected $request; 

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function transportation()
    {
        return view('transportations')->with([
            'data' => $data
        ]);
    }

    public function transportation_create()
    {
        return view('create_form.transportation_c');
    }

    public function transportation_create_save()
    {
        $data = $this->request->except('_token');
        Transportation::create($data);

        return Redirect::route('transportation');
    }

    public function transportation_delete($id)
    {
        Transportation::find($id)->delete();

        return Redirect::route('transportation');
    }

    public function transportation_update($id)
    {
        return view('update_form.transportation_update')->with([
            'data' => Transportation::find($id)
        ]);
    }

    public function transportation_update_save($id)
    {
        Transportation::find($id)->update(
            $this->request->except('_token')
        );

        return Redirect::route('transportation');
    }
}
