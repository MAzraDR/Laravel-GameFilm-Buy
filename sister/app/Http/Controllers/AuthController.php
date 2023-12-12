<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login() {
        return view("login");
    }

    public function register() {
        return view("register");
    }

    public function prosesregister(Request $request) {
        $payload = $request->only("name", "email","password");
        $validate = Validator::make($payload, [
            "name" => "required",
            "email"=> "required",
            "password"=> "required",
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

        // return response()->json([
        //     "status_code" => 200,
        //     "message" => "success",
        //     "user" => $user,
        //     "token"=> $token,
        // ]);

        return redirect(route('auth.login'));
    }

    public function proseslogin(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = User::where('email', $request->email)->first();
            $success['token'] = $authUser-> createToken('MyAuthApp')->plainTextToken;
            $success['name'] = $authUser->name;

            // return response()->json([
            // 'success' => true,
            // 'message' => 'Success Login',
            // 'data' => $success,       
            // ]);
            return redirect(route('dashboard'));                    
        } else {
            return $this->sendError('Unauthorized', ['error' => 'Unauthorized']);
        }

        // }
    }    
}

