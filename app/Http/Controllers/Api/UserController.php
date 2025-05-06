<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::all();
            return UserResource::collection($users);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Error when querying users.',
                'code' => 'USERS_SHOW_ALL_ERROR'
            ], 500);
        }
    }

    public function store(UserStoreRequest $request)
    {
        try {
            $user = User::create($request->validated());
            return response()->json([
                'message' => 'User created successfully.',
                'user' => new UserResource($user) 
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Ops, query failed. Try later!',
                'code' => 'USER_ADD_ERROR'
            ], 500);
        }
    }

    public function show(User $user)
    {
        try {
            return new UserResource($user);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Ops, query failed. Try later!',
                'code' => 'USER_SHOW_ERROR'
            ], 500);
        }
    }

    public function update(UserStoreRequest $request, User $user)
    {
        try {
            $user->fill($request->validated());

            $user->isDirty() ? $user->save() : null;

            return response()->json([
                'message' => $user->wasChanged() 
                    ? 'User updated.' 
                    : 'No changes detected.',
                'user' => new UserResource($user)
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Ops, the user has not been updated. Try later!',
                'code' => 'USER_UPDATE_ERROR'
            ], 500);
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return response()->json([
                'message' => "Excluded user.", 
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Ops, The user could not be deleted. Try later!',
                'code' => 'USER_DELETE_ERROR'
            ], 500);
        }
    }
}
