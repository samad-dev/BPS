<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuildingPermitController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        $building_permits = DB::select('SELECT * FROM building_permits');
        return response()->json($building_permits);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        DB::insert('INSERT INTO building_permits (project_id, applicant_id, permit_type, permit_status, application_date, approval_date, expiration_date, fees_paid, owner_doc, draw_doc, stdraw_doc, soil_doc, fire_doc, agency_doc, integ_doc, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$data['project_id'], $data['applicant_id'], $data['permit_type'], $data['permit_status'], $data['application_date'], $data['approval_date'], $data['expiration_date'], $data['fees_paid'], $data['owner_doc'], $data['draw_doc'], $data['stdraw_doc'], $data['soil_doc'], $data['fire_doc'], $data['agency_doc'], $data['integ_doc'], now()]);

        return response()->json(['message' => 'Building permit created successfully']);
    }

    public function show($id)
    {
        $building_permit = DB::select('SELECT * FROM building_permits WHERE id = ?', [$id]);
        return response()->json($building_permit);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::update('UPDATE building_permits SET project_id = ?, applicant_id = ?, permit_type = ?, permit_status = ?, application_date = ?, approval_date = ?, expiration_date = ?, fees_paid = ?, owner_doc = ?, draw_doc = ?, stdraw_doc = ?, soil_doc = ?, fire_doc = ?, agency_doc = ?, integ_doc = ? WHERE id = ?',
            [$data['project_id'], $data['applicant_id'], $data['permit_type'], $data['permit_status'], $data['application_date'], $data['approval_date'], $data['expiration_date'], $data['fees_paid'], $data['owner_doc'], $data['draw_doc'], $data['stdraw_doc'], $data['soil_doc'], $data['fire_doc'], $data['agency_doc'], $data['integ_doc'], $id]);

        return response()->json(['message' => 'Building permit updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM building_permits WHERE id = ?', [$id]);
        return response()->json(['message' => 'Building permit deleted successfully']);
    }
}
