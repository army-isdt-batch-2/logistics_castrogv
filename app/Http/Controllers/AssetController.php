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
        $data = Asset::select('assets.name', 'assets.description', 'assets.category', 'total_stocks')
                    ->join('suppliers', 'suppliers.id', 'assets.suppliers_id')
                    ->join('storage', 'storage.id', 'assets.storage_id')
                    ->get();

        return view('assets')->with([
            'data' => $data
        ]);
    }

    public function asset_create()
    {
        return view('create_form.asset_c');
    }

    public function asset_create_save()
    {
    
        $data = $this->request->except('_token');
        Asset::create($data);

        return Redirect::route('asset');
    }

    public function asset_delete($id)
    {
        Asset::find($id)->delete();

        return Redirect::route('asset');
    }

    public function asset_update($id)
    {
        return view('update_form.asset_update')->with([
            'data' => Asset::find($id)
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

