<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class PermittypeController extends Controller
{
    public function index()
    {
        $pertmit_type = DB::select('SELECT * FROM pertmit_type');
        return response()->json($pertmit_type);
    }

    public function store(Request $request)
    {
        $data = $request->all();
       
        DB::insert(
            'INSERT INTO pertmit_type (type, created_at) VALUES (?, ?)',
            [$data['pertmit_type'], now()]
        );

        return response()->json(['message' => 'Status created successfully']);
    }

    public function show($id)
    {
        $project = DB::select('SELECT * FROM pertmit_type WHERE user_id = ?', [$id]);
        return response()->json($project);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::update(
            'UPDATE pertmit_type SET project_name = ?, project_description = ?, start_date = ?, completion_date = ?, ownership_doc = ?, estimated_cost = ?, location_name = ?, latitude = ?, longitude = ?, radius = ?, area = ? WHERE user_id = ?',
            [$data['project_name'], $data['project_description'], $data['start_date'], $data['completion_date'], $data['ownership_doc'], $data['estimated_cost'], $data['location_name'], $data['latitude'], $data['longitude'], $data['radius'], $data['area'], $id]
        );

        return response()->json(['message' => 'Project updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM pertmit_type WHERE user_id = ?', [$id]);
        return response()->json(['message' => 'Project deleted successfully']);
    }
}