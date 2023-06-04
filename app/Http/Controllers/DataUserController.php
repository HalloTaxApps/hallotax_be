<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataUser = DataUser::all();

        return response()->json([
            'data' => $dataUser
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataUser = DataUser::create([
            'name' => $request->name,
            'birthday' => $request->birthday,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'gender' => $request->gender,
            'address' => $request->address,
            'role' => $request->role,
            'image' => $request->image,
            'username' => $request->username,
            'password' => $request->password
        ]);

        return response()->json([
            'data' => $dataUser
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DataUser $dataUser)
    {
        return response()->json([
            'data' => $dataUser
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataUser $dataUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataUser $dataUser)
    {
        $dataUser->name = $request->name;
        $dataUser->birthday = $request->birthday;
        $dataUser->email = $request->email;
        $dataUser->telephone = $request->telephone;
        $dataUser->gender = $request->gender;
        $dataUser->address = $request->address;
        $dataUser->role = $request->role;
        $dataUser->image = $request->image;
        $dataUser->username = $request->username;
        $dataUser->password = $request->password;
        $dataUser->save();

        return response()->json([
            'data' => $dataUser
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataUser $dataUser)
    {
        $dataUser->delete();

        return response()->json([
            'message' => 'User Deleted'
        ]);
    }
}
