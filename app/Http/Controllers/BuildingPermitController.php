<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class BuildingPermitController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        $building_permits = DB::select('SELECT * FROM bps.projects as pp
        join building_permits as bp on bp.project_id=pp.id
        join users as us on us.id=bp.applicant_id 
        left join inspections as ii on ii.inspection_id=bp.id
        join permit_status as ps on ps.id=bp.permit_status
        join pertmit_type as tt on tt.id=bp.permit_type');
        return response()->json($building_permits);
    }

    public function project_list()
    {
        $building_permits = DB::select('SELECT p.*,bp.id as permit_id FROM bps.building_permits bp join projects p on p.id = bp.project_id where bp.id not in (SELECT permit_id from inspections);');
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

    public function applicant_property($id)
    {

        $user = DB::select("SELECT * FROM bps.projects as pp
        join building_permits as bp on bp.project_id=pp.id
        join users as us on us.id=bp.applicant_id 
        left join inspections as ii on ii.inspection_id=bp.id
        join permit_status as ps on ps.id=bp.permit_status
        join pertmit_type as tt on tt.id=bp.permit_type where us.id=$id");
        return response()->json($user);
    }
    public function applicant_users($email)
    {
        $existingUser = DB::table('users')->where('email', $email)->first();

        if ($existingUser) {
            // User already exists, return their ID and a status code (0 for existing user)
            return response()->json([
                'user_id' => $existingUser->id,
                'name' => $existingUser->name,
                'email' => $existingUser->email,
                'status' => 0,
            ]);
        } else {
            // User doesn't exist, insert a new user into the database
            $hashedPassword = Hash::make($email . '12345');

            $newUserId = DB::table('users')->insertGetId([
                'user_type' => 'Individual',
                'organization_name' => '',
                'office_location' => '',
                'name' => $email,
                'password' => $hashedPassword,
                'email' => $email,
                'role' => 'End-user',
                'created_by' => '',
                'created_at' => now(),
            ]);
            echo $newUserId;
            // Return the new user's ID and a status code (1 for new user)
            return response()->json([
                'user_id' => $newUserId,
                'name' => $email,
                'email' => $email,
                'status' => 1,
            ]);
        }

    }

    public function applicant_store(Request $request)
    {

        $data = $request->all();
        $user = $this->applicant_users($data['applicant']);
        $stt = json_encode($user);
        // echo $stt;
        $val = json_decode($stt);
        $userId = $val->original->user_id;
        $username = $val->original->name;
        $user_emails = $val->original->email;
        // $type = gettype($user);
        // echo $type;
        // $userId = $user->original->user_id;

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
                    $userId,
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
            $data = array('name' => $username);



            Mail::send([], [], function ($message) use ($user_emails, $username) {
                $message->to($user_emails, $username)
                    ->subject('Welcome to CSSP')
                    ->setBody('Hello, ' . $username . '! Your Permit applied Successfully. Please Login with Email : ' . $user_emails . ' and Password : ' . $user_emails . '12345', 'text/html');
            });

            $data = array('name' => "Virat Gandhi");


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
}