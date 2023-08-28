<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuGroupController extends Controller
{
    public function index()
    {
        $buGroups = DB::select('SELECT s.*,IFNULL(c.name,"System") as company,b.name FROM `bu_group` s left join company c on s.company_id = c.id join business_units b on s.bu_id = b.id;  ');
        return response()->json($buGroups);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $insertedId = DB::table('bu_group')->insertGetId([
            'title' => $data['title'],
            'bu_id' => $data['bu_id'],
            'company_id' => $data['company_id'],
            'created_by' => $data['created_by'],
        ]);

        return response()->json(['message' => 'Data inserted successfully', 'inserted_id' => $insertedId]);
    }
    public function show($id)
    {
        $buGroup = DB::select('SELECT * FROM bu_group WHERE id = ?', [$id]);
        return response()->json($buGroup);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        DB::update('UPDATE bu_group SET title = ?, bu_id = ?, company_id = ?, created_by = ? WHERE id = ?', [$data['title'], $data['bu_id'], $data['company_id'], $data['created_by'], $id]);
        return response()->json(['message' => 'BU group updated successfully']);
    }

    public function companywise($id)
    {
        $status = DB::select('SELECT * FROM bu_group WHERE company_id = ?', [$id]);
        return response()->json($status);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM bu_group WHERE id = ?', [$id]);
        return response()->json(['message' => 'BU group deleted successfully']);
    }
}