<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Distribution;
use App\Models\Asset;

class DistributionController extends Controller
{
    protected $request; 

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function distribution()
    {
        $data=Distribution::with('assets')->get();
        
        return view('distributions')->with([
            'data' => $data
        ]);
    }

    public function distribution_create()
    {
        $assets=Asset::select('id','name')->get();

        return view('create_form.distribution_c')->with(['assets'=>$assets]);
    }

    public function distribution_create_save()
    {
    
        Distribution::create($this->request->except('_token'));

        return Redirect::route('distribution');
    }

    public function distribution_delete($id)
    {
        Distribution::find($id)->delete();

        return Redirect::route('distribution');
    }

    public function distribution_update($id)
    {
        $assets=Asset::select('id','name')->get();
        $data=Distribution::find($id);
        
        return view('update_form.distribution_update')->with([
            'data' => $data, 'assets' => $assets
        ]);
    }

    public function distribution_update_save($id)
    {
        Distribution::find($id)->update(
            $this->request->except('_token')
        );
       //dd($this->request->all($id));
        return Redirect::route('distribution');
    }
}
