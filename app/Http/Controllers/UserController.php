<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Article;

class UserController extends Controller
{
    public function create(UserRequest $request)
    {
        $user = new User();

        $user->username = $request->username;
        $user->password = Hash::make($request);

        $user->save();
        dump($user);
    }

    public function selectAll()
    {
        $users = User::all();
        dd($users);
    }

    public function selectOne(Request $request)
    {
        $uuid = $request->uuid;
        $user = User::findOrFail($uuid);
        dd($user);
    }

    public function update(UserRequest $request)
    {
        $uuid = $request->uuid;
        $user = User::findOrFail($uuid)->first();
        $user->username = $request->username;
        if ($request->password)
            $user['password'] = Hash::make($request->password);
        $user->save();
        dd($user);
    }

    public function delete(Request $request)
    {   
        $uuid = $request->uuid;
        $user = User::where(function ($query) use ($uuid) {
            $query->where('id', $uuid)->firstorfail()->delete();
        });
        return redirect('/');
    }
}
