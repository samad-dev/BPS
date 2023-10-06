<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

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
        $ownership_doc = $request->file('ownership_doc');
        $ownership_docfileName = time() . '_' . $ownership_doc->getClientOriginalName();
        $ownership_docfilePath = $ownership_doc->storeAs('uploads', $ownership_docfileName, 'public');

        $drawing_doc = $request->file('drawing_doc');
        $drawing_docfileName = time() . '_' . $drawing_doc->getClientOriginalName();
        $drawing_docfilePath = $drawing_doc->storeAs('uploads', $drawing_docfileName, 'public');

        $st_drawing = $request->file('st_drawing');
        $st_drawingfileName = time() . '_' . $st_drawing->getClientOriginalName();
        $st_drawingfilePath = $st_drawing->storeAs('uploads', $st_drawingfileName, 'public');

        $soil_doc = $request->file('soil_doc');
        $soil_docfileName = time() . '_' . $soil_doc->getClientOriginalName();
        $soil_docfilePath = $soil_doc->storeAs('uploads', $soil_docfileName, 'public');

        $fire_doc = $request->file('fire_doc');
        $fire_docfileName = time() . '_' . $fire_doc->getClientOriginalName();
        $fire_docfilePath = $fire_doc->storeAs('uploads', $fire_docfileName, 'public');

        $agency_doc = $request->file('agency_doc');
        $agency_docfileName = time() . '_' . $agency_doc->getClientOriginalName();
        $agency_docfilePath = $agency_doc->storeAs('uploads', $agency_docfileName, 'public');

        $integrity_doc = $request->file('integrity_doc');
        $integrity_docfileName = time() . '_' . $integrity_doc->getClientOriginalName();
        $integrity_docfilePath = $integrity_doc->storeAs('uploads', $integrity_docfileName, 'public');

        $fee_slip = $request->file('fee_slip');
        $fee_slipfileName = time() . '_' . $fee_slip->getClientOriginalName();
        $fee_slipfilePath = $fee_slip->storeAs('uploads', $fee_slipfileName, 'public');
        // DB::insert('INSERT INTO building_permits (project_id, applicant_id, permit_type, permit_status, application_date, approval_date, expiration_date, fees_paid, owner_doc, draw_doc, stdraw_doc, soil_doc, fire_doc, agency_doc, integ_doc, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
        //     [$data['project_id'], $data['applicant_id'], $data['permit_type'], $data['permit_status'], $data['application_date'], $data['approval_date'], $data['expiration_date'], $data['fees_paid'], $data['owner_doc'], $data['draw_doc'], $data['stdraw_doc'], $data['soil_doc'], $data['fire_doc'], $data['agency_doc'], $data['integ_doc'], now()]);

        try {

            $lastInsertedId = DB::table('projects')->insertGetId([
                'project_name' => $data['project_name'],
                'project_description' => $data['project_description'],
                'start_date' => $data['start_date'],
                'completion_date' => $data['completion_date'],
                'ownership_doc' => $ownership_docfilePath,
                'estimated_cost' => $data['estimated_cost'],
                'location_name' => $data['location_name'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'radius' => $data['radius'],
                'area' => $data['area'],
                'user_id' => $data['user_id'],
                'created_at' => now(),
                'status' => 0,

            ]);

            DB::insert(
                'INSERT INTO building_permits (
                    project_id, 
                    applicant_id, 
                    permit_type, 
                    permit_status, 
                    application_date, 
                    approval_date, 
                    expiration_date, 
                    fees_paid, 
                    fee_slip, 
                    owner_doc, 
                    draw_doc, 
                    stdraw_doc, 
                    soil_doc, 
                    fire_doc, 
                    agency_doc, 
                    integ_doc, 
                    created_at
                    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [
                    $lastInsertedId,
                    $data['applicant'],
                    $data['permit_type'],
                    $data['permit_status'],
                    $data['applicant_date'],
                    $data['approval_date'],
                    $data['expiry_date'],
                    $data['estimated_cost'],
                    $fee_slipfilePath,
                    $ownership_docfilePath,
                    $drawing_docfilePath,
                    $st_drawingfilePath,
                    $soil_docfilePath,
                    $fire_docfilePath,
                    $agency_docfilePath,
                    $integrity_docfilePath,
                    now()
                ]
            );

            return response()->json([
                'message' => 'Property created successfully',
                'response' => 200
            ]);
        } catch (QueryException $e) {
            // Handle the database exception here
            return response()->json(
                ['message' => 'Failed to create building permit'],
                500
            );
        }
    }

    public function show($id)
    {
        $building_permit = DB::select('SELECT * FROM building_permits WHERE id = ?', [$id]);
        return response()->json($building_permit);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::update(
            'UPDATE building_permits SET project_id = ?, applicant_id = ?, permit_type = ?, permit_status = ?, application_date = ?, approval_date = ?, expiration_date = ?, fees_paid = ?, owner_doc = ?, draw_doc = ?, stdraw_doc = ?, soil_doc = ?, fire_doc = ?, agency_doc = ?, integ_doc = ? WHERE id = ?',
            [$data['project_id'], $data['applicant_id'], $data['permit_type'], $data['permit_status'], $data['application_date'], $data['approval_date'], $data['expiration_date'], $data['fees_paid'], $data['owner_doc'], $data['draw_doc'], $data['stdraw_doc'], $data['soil_doc'], $data['fire_doc'], $data['agency_doc'], $data['integ_doc'], $id]
        );

        return response()->json(['message' => 'Building permit updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM building_permits WHERE id = ?', [$id]);
        return response()->json(['message' => 'Building permit deleted successfully']);
    }
}