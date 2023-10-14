<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;
use Illuminate\Database\QueryException;


class Login extends Controller
{
    public function login($email,$password)
    {
        try {
        //    echo $hashedPassword = Hash::make($password);
            $user = DB::select("SELECT * FROM bps.users where email='$email' and password_hash='$password'");
            return response()->json($user);


        } catch (QueryException $e) {
            // Handle the database exception here
            return response()->json(
                ['message' => 'Failed to Login'],
                500
            );
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $hashedPassword = Hash::make($data['password_hash']);

        DB::insert(
            'INSERT INTO users ( user_type, organization_name, office_location, username, password_hash, email, role, created_by, created_at) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$data['user_type'], $data['organization_name'], $data['office_location'], $data['username'], $hashedPassword, $data['email'], $data['role'], $data['created_by'], now()]
        );

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

        DB::update(
            'UPDATE users SET user_type = ?, organization_name = ?, office_location = ?, username = ?, email = ?, role = ?, created_by = ? WHERE user_id = ?',
            [$data['user_type'], $data['organization_name'], $data['office_location'], $data['username'], $data['email'], $data['role'], $data['created_by'], $user_id]
        );

        return response()->json(['message' => 'User updated successfully']);
    }

    public function destroy($user_id)
    {
        DB::delete('DELETE FROM users WHERE user_id = ?', [$user_id]);
        return response()->json(['message' => 'User deleted successfully']);
    }
}