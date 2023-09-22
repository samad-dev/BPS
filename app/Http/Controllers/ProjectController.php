<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = DB::select('SELECT * FROM projects');
        return response()->json($projects);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $uploadedFile = $request->file('ownership_doc');
        $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
        $filePath = $uploadedFile->storeAs('uploads', $fileName, 'public');

        DB::insert(
            'INSERT INTO projects (project_name, project_description, start_date, completion_date, ownership_doc, estimated_cost, location_name, latitude, longitude, radius, area, user_id, created_at,status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)',
            [$data['project_name'], $data['project_description'], $data['start_date'], $data['completion_date'], $filePath, $data['estimated_cost'], $data['location_name'], $data['latitude'], $data['longitude'], $data['radius'], $data['area'], $data['user_id'], now(),0]
        );

        return response()->json(['message' => 'Project created successfully']);
    }

    public function show($id)
    {
        $project = DB::select('SELECT * FROM projects WHERE user_id = ?', [$id]);
        return response()->json($project);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::update(
            'UPDATE projects SET project_name = ?, project_description = ?, start_date = ?, completion_date = ?, ownership_doc = ?, estimated_cost = ?, location_name = ?, latitude = ?, longitude = ?, radius = ?, area = ? WHERE user_id = ?',
            [$data['project_name'], $data['project_description'], $data['start_date'], $data['completion_date'], $data['ownership_doc'], $data['estimated_cost'], $data['location_name'], $data['latitude'], $data['longitude'], $data['radius'], $data['area'], $id]
        );

        return response()->json(['message' => 'Project updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM projects WHERE user_id = ?', [$id]);
        return response()->json(['message' => 'Project deleted successfully']);
    }
}