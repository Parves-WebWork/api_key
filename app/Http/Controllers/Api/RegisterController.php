<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;
use Validator; // Fixed typo here
use Illuminate\Support\Facades\Hash; // Added Hash facade for password hashing
use App\Models\User;
use Auth;
class RegisterController extends BaseController
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validator Error', $validator->errors()); // Fixed method name 'seedError' to 'sendError'
        }

        // Hash the password
        $hashedPassword = Hash::make($request->password);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword, // Use the hashed password here
        ]);

        $success['token'] = $user->createToken('RestApi')->plainTextToken;
        $success['name'] = $user->name;

        return $this->sendResponse($success, 'User Registered Successfully');
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'email' => 'required|email|max:250',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validator Error', $validator->errors()); // Fixed method name 'seedError' to 'sendError'
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))

        {
            $user = Auth::user();

            $success['token'] = $user->createToken('RestApi')->plainTextToken;
             $success['name'] = $user->name;

             return $this->sendResponse($success, 'User Login  Successfully');

        }
        else{

            return $this->sendError('Unauthorized',['error' => 'Unauthorized']);
        }
    }
}
