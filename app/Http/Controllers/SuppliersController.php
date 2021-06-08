<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Supplier;

class SuppliersController extends Controller
{
    protected $request; 

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function supplier()
    {
        $data = Supplier::all();

        return view('suppliers')->with([
            'data' => $data
        ]);
    }

    public function supplier_create()
    {
        return view('create_form.supplier_c');
    }

    public function supplier_create_save()
    {
        $data = $this->request->except('_token');
        Supplier::create($data);

        return Redirect::route('supplier');
    }

    public function supplier_delete($id)
    {
        Supplier::find($id)->delete();

        return Redirect::route('supplier');
    }

    public function supplier_update($id)
    {
        return view('update_form.supplier_update')->with([
            'data' => Supplier::find($id)
        ]);
    }

    public function supplier_update_save($id)
    {
        Supplier::find($id)->update(
            $this->request->except('_token')
        );

        return Redirect::route('supplier');
    }
}
