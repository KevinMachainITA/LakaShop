<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UserCollection(User::all());
    }


    public function searchByName(Request $request)
    {
        $searchTerm = $request->searchTerm;
        $users = User::where('name', 'like', '%' . $searchTerm . '%')->get();
        if ($users->isEmpty()) {
            return response()->json(['data' => []]);
        } else {
            return new UserCollection($users);
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'id' =>['required'],
            'name' =>['required','string'],
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($request->id),
            ],
            'phone' =>['required','string'],
            'shipping_address' =>['required','string'],
            'admin' => ['required']
        ]);

        $user = User::find($request->id);
        $user->name =  $request->name;
        $user->email =  $request->email;
        $user->phone =  $request->phone;
        $user->shipping_address =  $request->shipping_address;
        $user->admin = $request->admin;

        if($user->save()){
            return response()->json(['message' => 'User updated successfully'], 200);
        } else {
            return response()->json(['error' => 'User have not updated'], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function token(){
        return csrf_token();
    }
}
