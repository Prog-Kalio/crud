<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Vendor;
use App\Http\Resources\Vendor as VendorResource;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To retrieve all vendors info
        $vendors = Vendor::all();
        return new VendorResource($vendors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //To create new Vendor info
        $vendor = new Vendor();

        // FormRequest
        $vendor->name = $request->input('name');
        $vendor->category = $request->input('category');

        $vendor->save();
        return new VendorResource($vendor);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //To find specific info using the id
        $vendor = Vendor::findOrFail($id);
        return new VendorResource($vendor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //To update a given Vendor info
        $vendor = Vendor::findOrFail($id);

        $vendor->name = $request->input('name');
        $vendor->category = $request->input('category');

        $vendor->save();
        return new VendorResource($vendor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //To delete a vendor info
        $vendor = Vendor::findOrFail($id);
        if($vendor->delete()) {
            return new VendorResource($vendor);
        }
    }
}
