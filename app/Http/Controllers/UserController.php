<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::select('SELECT * FROM users');
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $hashedPassword = Hash::make($data['password']);
        // You need to adjust the field names according to your table structure
        DB::insert('INSERT INTO users (first_name, last_name, company_id, name, email, designation_id,  password) VALUES ( ?, ?, ?, ?, ?, ?, ?)', [
            $data['first_name'],
            $data['last_name'],
            $data['company_id'],
            $data['name'],
            $data['email'],
            $data['designation_id'],
            $hashedPassword,
        ]);
        return response()->json(['message' => 'User created successfully']);
    }

    public function show($id)
    {
        $user = DB::select('SELECT * FROM users WHERE id = ?', [$id]);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $hashedPassword = Hash::make($data['password']);
        // You need to adjust the field names according to your table structure
        DB::update('UPDATE users SET first_name = ?, last_name = ?, company_id = ?, name = ?, email = ?, designation_id = ?,  password = ? WHERE id = ?', [
            $data['first_name'],
            $data['last_name'],
            $data['company_id'],
            $data['name'],
            $data['email'],
            $data['designation_id'],
            $hashedPassword,
            $id
        ]);
        return response()->json(['message' => 'User updated successfully']);
    }

    public function companywise($id)
    {
        $status = DB::select('SELECT * FROM users WHERE company_id = ?', [$id]);
        return response()->json($status);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM users WHERE id = ?', [$id]);
        return response()->json(['message' => 'User deleted successfully']);
    }
}
