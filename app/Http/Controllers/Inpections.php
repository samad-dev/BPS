<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class Inpections extends Controller
{
    public function index()
    {
        $permit_status = DB::select('SELECT * FROM bps.inspections as ip 
        join building_permits as bp on bp.id=ip.permit_id
        join projects as pj on pj.id=bp.project_id');
        return response()->json($permit_status);
    }

    public function store(Request $request)
    {
        $data = $request->all();
       
        DB::insert(
            'INSERT INTO permit_status (status, color, created_at) VALUES (?, ?, ?)',
            [$data['s_name'], $data['s_color'], now()]
        );

        return response()->json(['message' => 'Status created successfully']);
    }

    public function show($id)
    {
        $project = DB::select('SELECT * FROM permit_status WHERE user_id = ?', [$id]);
        return response()->json($project);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::update(
            'UPDATE permit_status SET project_name = ?, project_description = ?, start_date = ?, completion_date = ?, ownership_doc = ?, estimated_cost = ?, location_name = ?, latitude = ?, longitude = ?, radius = ?, area = ? WHERE user_id = ?',
            [$data['project_name'], $data['project_description'], $data['start_date'], $data['completion_date'], $data['ownership_doc'], $data['estimated_cost'], $data['location_name'], $data['latitude'], $data['longitude'], $data['radius'], $data['area'], $id]
        );

        return response()->json(['message' => 'Project updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM permit_status WHERE user_id = ?', [$id]);
        return response()->json(['message' => 'Project deleted successfully']);
    }
}