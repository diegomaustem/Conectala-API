<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function store(UserStoreRequest $request)
    {
        $user = User::create($request->validated());

        return response()->json([
            'message' => "User created successfully.",
            'user' => new UserResource($user)
        ], 201);
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function update(UserStoreRequest $request, User $user)
    {
        $user->update($request->validated());

        return response()->json([
            'message' => "User updated successfully.",
            'user' => new UserResource($user)
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'message' => "User deleted successfully!",
        ], 204);
    }
}
