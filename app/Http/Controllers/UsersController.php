<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();   
        return view('users.list', ['users' => $users]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        User::create($data);
        return redirect('/usuarios');
    }

    public function editForm($id)
    {
        $user = User::findOrFail($id);
        return  view('users.edit', ['user' => $user ]);
    }

    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/usuarios');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/usuarios');
    }
}
