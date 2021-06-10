<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Asset;
use App\Models\Supplier;
use App\Models\Storage;

class AssetController extends Controller
{
    protected $request; 

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function asset()
    {
        $data=Asset::with(['suppliers','storage'])->get();

        return view('assets')->with([
            'data' => $data
        ]);
    }

    public function asset_create()
    {
        $suppliers=Supplier::select('id','name')->get();
        $storage=Storage::select('id','name')->get();
        return view('create_form.asset_c')->with(['suppliers'=>$suppliers,'storage'=>$storage]);
    }

    public function asset_create_save()
    {
    
        Asset::create($this->request->except('_token'));

        return Redirect::route('asset');
    }

    public function asset_delete($id)
    {
        Asset::find($id)->delete();

        return Redirect::route('asset');
    }

    public function asset_update($id)
    {
        $suppliers = Supplier::select('id','name')->get();
        $storage = Storage::select('id','name')->get();
        $data=Asset::find($id);
        
        return view('update_form.asset_update')->with([
            'data' => $data, 'suppliers' => $suppliers, 'storage' => $storage
        ]);
    }

    public function asset_update_save($id)
    {
        Asset::find($id)->update(
            $this->request->except('_token')
        );

        return Redirect::route('asset');
    }
}

