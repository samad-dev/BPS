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
        join projects as pj on pj.id=bp.project_id
        join users as us on us.id=ip.inspector_id');
        return response()->json($permit_status);
    }

    public function store(Request $request)
    {
        $data = $request->all();
       
        DB::insert(
            'INSERT INTO `bps`.`inspections`
            (
            `permit_id`,
            `inspection_type`,
            `inspection_date`,
            `inspector_id`,
            `team_id`,
            `inspection_result`,
            `notes`) VALUES (?, ?, ?,?,?,?,?)',
            [$data['permit_id'], $data['inspection_type'],$data['inspection_date'], $data['inspector_id'],$data['team_id'], $data['inspection_result'],$data['notes']]
        );
        $data = array('name'=>"Inspection Assign");
   
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('ahmedhamzaansari.99@gmail.com', 'Tutorials Point')->subject
              ('Laravel Basic Testing Mail');
           $message->from('abdulsamadq67@gmail.com','Abdul Samad');
        });
        return response()->json(['message' => 'Inspection created successfully']);
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

    public function inspector_task($id)
    {
        $project = DB::select("SELECT * FROM bps.inspections as ii
        join users as us on us.id=ii.inspector_id 
        join building_permits bp on bp.id=ii.permit_id
        join permit_status as ps on ps.id=bp.permit_status
        join pertmit_type as ppt on ppt.id=bp.permit_type
        join projects as pj on pj.id=bp.project_id where us.id=$id and ii.inspection_result='Approval'");
        return response()->json($project);
    }

    public function update_inspection(Request $request, $id)
    {
        $data = $request->all();

        DB::update(
            'UPDATE inspections SET inspection_result = ?, notes = ? WHERE inspection_id = ?',
            [$data['result'], $data['note'], $id]
        );
        return response()->json(['message' => 'Inpection updated successfully']);
    }
}