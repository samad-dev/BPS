<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuFieldController extends Controller
{
    public function index()
    {
        $buFields = DB::select('SELECT * FROM bu_fields');
        return response()->json($buFields);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        DB::insert(
            'INSERT INTO bu_fields (name, type, bu_id) VALUES (?, ?, ?)',
            [$data['name'], $data['type'], $data['bu_id']]
        );

        return response()->json(['message' => 'Business Unit Field created successfully']);
    }

    public function show($id)
    {
        $buField = DB::select('SELECT * FROM bu_fields WHERE bu_id = ?', [$id]);
        return response()->json($buField);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM bu_fields WHERE bu_id = ?', [$id]);
        return response()->json(['message' => 'Business Unit Field deleted successfully']);
    }
}
