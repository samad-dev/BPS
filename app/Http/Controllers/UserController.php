<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::select('SELECT * FROM users');
        return response()->json($users);
    }

    public function inspectors()
    {
        $users = DB::select('SELECT * FROM users where role = "Inspector"');
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $hashedPassword = Hash::make($data['password_hash']);


        DB::insert('INSERT INTO users ( user_type, organization_name, office_location, name, password, email, role, created_by, created_at) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [ $data['user_type'], $data['organization_name'], $data['office_location'], $data['username'], $hashedPassword, $data['email'], $data['role'], $data['created_by'], now()]);
        
        return response()->json(['message' => 'User created successfully']);
    }

    public function show($user_id)
    {
        $user = DB::select('SELECT * FROM users WHERE user_id = ?', [$user_id]);
        return response()->json($user);
    }

    public function update(Request $request, $user_id)
    {
        $data = $request->all();

        DB::update('UPDATE users SET user_type = ?, organization_name = ?, office_location = ?, username = ?, email = ?, role = ?, created_by = ? WHERE user_id = ?',
            [$data['user_type'], $data['organization_name'], $data['office_location'], $data['username'], $data['email'], $data['role'], $data['created_by'], $user_id]);

        return response()->json(['message' => 'User updated successfully']);
    }

    public function destroy($user_id)
    {
        DB::delete('DELETE FROM users WHERE user_id = ?', [$user_id]);
        return response()->json(['message' => 'User deleted successfully']);
    }
}
