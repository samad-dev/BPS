<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = DB::select('SELECT * FROM designations');
        return response()->json($designations);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        DB::insert('INSERT INTO designations (company_id, title, active) VALUES (?, ?, ?)',
            [$data['company_id'], $data['title'], $data['active']]);

        return response()->json(['message' => 'Designation created successfully']);
    }

    public function show($id)
    {
        $designation = DB::select('SELECT * FROM designations WHERE id = ?', [$id]);
        return response()->json($designation);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::update('UPDATE designations SET company_id = ?, title = ?, active = ? WHERE id = ?', [$data['company_id'], $data['title'], $data['active'], $id]);

        return response()->json(['message' => 'Designation updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM designations WHERE id = ?', [$id]);
        return response()->json(['message' => 'Designation deleted successfully']);
    }
}