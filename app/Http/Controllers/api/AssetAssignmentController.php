<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\AssetAssignment;
use App\Http\Resources\AssetAssignment as AssetAssignmentResource;

class AssetAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To get all AssetAssignment info
        $asset_assignments = AssetAssignment::all();
        return new AssetAssignmentResource($asset_assignments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //To create AssetAssignment info
        $asset_assignment = new AssetAssignment();

        // Form Request
        $asset_assignment->assignment_date = $request->input('assignment_date');
        $asset_assignment->status = $request->input('status');
        $asset_assignment->is_due = $request->input('is_due');
        $asset_assignment->due_date = $request->input('due_date');
        $asset_assignment->assigned_by = $request->input('assigned_by');

        $asset_assignment->save();
        return new AssetAssignmentResource($asset_assignment);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //To display a specific AssetAssignment info
        $asset_assignment = AssetAssignment::findOrFail($id);
        return new AssetAssignmentResource($asset_assignment);
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
        //To update a given AssetAssignment info
        $asset_assignment = AssetAssignment::findOrFail($id);

        $asset_assignment->assignment_date = $request->input('assignment_date');
        $asset_assignment->status = $request->input('status');
        $asset_assignment->is_due = $request->input('is_due');
        $asset_assignment->due_date = $request->input('due_date');
        $asset_assignment->assigned_by = $request->input('assigned_by');

        $asset_assignment->save();
        return new AssetAssignmentResource($asset_assignment);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //To delete a given AssetAssignment info
        $asset_assignment = AssetAssignment::findOrFail($id);
        if($asset_assignment->delete()) {
            return new AssetAssignmentResource($asset_assignment);
        }
    }
}
