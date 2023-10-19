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
            $hashedPassword = Hash::make($password);
            
            $user = DB::table('users')->where('email', $email)->first();

            if (!$user || !Hash::check($password, $user->password)) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }


            // $user = DB::select("SELECT * FROM bps.users where email='$email' and password='$hashedPassword'");
            return response()->json($user);


        } catch (QueryException $e) {
            // Handle the database exception here
            return response()->json(
                ['message' => 'Failed to Login'],
                500
            );
        }
    }

    public function system_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Validation failed'], 422);
        }

        $user = DB::table('users')->where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        // Generate API token if needed
        // $token = $user->createToken('api-token')->plainTextToken;

        return response()->json($user);
    }
}