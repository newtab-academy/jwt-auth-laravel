<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller {

    public function __construct() {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    public function index() {
        $users = User::all();
        return response()->json($users);
    }

    public function show($id) {
        $user = User::find($id);
        if(is_null($user)) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }
        return response()->json($user);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        if(is_null($user)) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Field name not found.'
            ], 404);
        }

        $user->name = $request->name;
        $user->save();

        return response()->json([
            'message' => 'User updated successfully.',
            'user' => $user
        ], 201);
    }

    public function destroy($id) {
        $user = User::find($id);
        if(is_null($user)) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }
        $user->delete();
        return response()->json([
            'message' => 'User deleted successfully.'
        ], 201);
    }
}
