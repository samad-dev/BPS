<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = DB::select('SELECT * FROM vw_tickets');
        return response()->json($tickets);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        DB::insert('INSERT INTO tickets (title, description, completed_date, due_date, company_id, completed_by, business_unit_id, vendor_id, vendor_type_id, reported_by, assigned_to, mode_of_complaint, sub_type_id, priority_id, impact_id, status_id, store_contact, created_by, email_status) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$data['title'], $data['description'], $data['completed_date'], $data['due_date'], $data['company_id'], $data['completed_by'], $data['business_unit_id'], $data['vendor_id'], $data['vendor_type_id'], $data['reported_by'], $data['assigned_to'], $data['mode_of_complaint'], $data['sub_type_id'], $data['priority_id'], $data['impact_id'], $data['status_id'], $data['store_contact'], $data['created_by'], $data['email_status']]);

        if($data['assigned_type']=='Individual'){
            $insertedId = DB::getPdo()->lastInsertId();
            DB::insert('INSERT INTO ticket_assigned_to (ticket_id, user_id, group_id, type) VALUES (?, ?, ?, ?)',
            [$insertedId, $data['assigned_to'], '0', 'Individual']);
        }
        else
        {
            $insertedId = DB::getPdo()->lastInsertId();
            DB::insert('INSERT INTO ticket_assigned_to (ticket_id, user_id, group_id, type) VALUES (?, ?, ?, ?)',
            [$insertedId, '0',$data['assigned_to'], 'Group']);
        }
        return response()->json(['message' => 'Ticket created successfully']);
    }

    public function show($id)
    {
        $ticket = DB::select('SELECT * FROM vw_tickets WHERE id = ?', [$id]);
        return response()->json($ticket);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::update('UPDATE tickets SET title = ?, description = ?, completed_date = ?, due_date = ?, company_id = ?, completed_by = ?, business_unit_id = ?, vendor_id = ?, vendor_type_id = ?, reported_by = ?, assigned_to = ?, mode_of_complaint = ?, sub_type_id = ?, priority_id = ?, impact_id = ?, status_id = ?, store_contact = ?, created_by = ?, email_status = ? WHERE id = ?',
            [$data['title'], $data['description'], $data['completed_date'], $data['due_date'], $data['company_id'], $data['completed_by'], $data['business_unit_id'], $data['vendor_id'], $data['vendor_type_id'], $data['reported_by'], $data['assigned_to'], $data['mode_of_complaint'], $data['sub_type_id'], $data['priority_id'], $data['impact_id'], $data['status_id'], $data['store_contact'], $data['created_by'], $data['email_status'], $id]);

        return response()->json(['message' => 'Ticket updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM tickets WHERE id = ?', [$id]);
        return response()->json(['message' => 'Ticket deleted successfully']);
    }


    public function saveactivity(Request $request)
    {
        $data = $request->all();

        DB::insert('INSERT INTO `ticket_activity`(`remarks`,`ticket_id`, `created_by`)  VALUES ( ?, ?, ?)',
            [$data['remarks'], $data['ticket_id'], $data['created_by']]);

        return response()->json(['message' => 'Ticket created successfully']);
    }  
    
    public function updatevendor(Request $request, $id)
    {
        $data = $request->all();

        DB::update('UPDATE tickets SET vendor_id = ? WHERE id = ?',
            [$data['vendor_id'], $id]);

        return response()->json(['message' => 'Vendor updated successfully']);
    }
        
}
