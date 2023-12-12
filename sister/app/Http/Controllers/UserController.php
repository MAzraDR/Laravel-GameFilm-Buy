<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        if ($users->count() > 0) {
            return response()->json(
                [
                    'status' => 200,
                    'users' => $users
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'status' => 400,
                    'users' => 'No Record Found'
                ],
                400
            );
        }
    }

    public function show($id)
    {
        $user = User::find($id);

        if ($user) {
            return response()->json([
                'status' => 200,
                'user' => $user
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'User Not Found'
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $payload = $request->only("name", "email", "password");
        $validate = Validator::make($payload, [
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status_code' => 404,
                "message" => $validate->errors(),
            ]);
        }

        $payload["password"] = bcrypt($payload["password"]);

        $user = User::create($payload);
        $token = $user->createToken("auth_token")->plainTextToken;

        return response()->json([
            "status_code" => 200,
            "message" => "success",
            "user" => $user,
            "token" => $token,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $request->validate([
            'name' => 'string',
            'email' => 'email|unique:users,email,' . $id,
            'password' => 'string', // Adjust the validation rules for the password
        ]);

        // Update only the provided fields
        $user->update([
            'name' => $request->input('name', $user->name),
            'email' => $request->input('email', $user->email),
            'password' => $request->has('password') ? bcrypt($request->input('password')) : $user->password,
        ]);

        return response()->json(['user' => $user], 200);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}
