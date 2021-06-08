<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Storage;

class StorageController extends Controller
{
    protected $request; 

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function storage()
    {
        $data = Storage::all();

        return view('storage')->with([
            'data' => $data
        ]);
    }

    public function storage_create()
    {
        return view('create_form.storage_c');
    }

    public function storage_create_save()
    {
        $data = $this->request->except('_token');
        Storage::create($data);

        return Redirect::route('storage');
    }

    public function storage_delete($id)
    {
        Storage::find($id)->delete();

        return Redirect::route('storage');
    }

    public function storage_update($id)
    {
        return view('update_form.storage_update')->with([
            'data' => Storage::find($id)
        ]);
    }

    public function storage_update_save($id)
    {
        Storage::find($id)->update(
            $this->request->except('_token')
        );

        return Redirect::route('storage');
    }
}
