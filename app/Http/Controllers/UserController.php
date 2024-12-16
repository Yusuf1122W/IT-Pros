<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {
        // Fetch all teams
        $users = User::all();

        // Pass teams to the view
        return view('users.index', ['users' => $users]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->role = $request->role;
        $newUser->email = $request->email;
        $newUser->email_verified_at = $request->email_verified_at;
        $newUser->school = $request->school;
        $newUser->password = $request->password;
        $newUser->save();

        return redirect()->route('users.index');
    }

    public function edit(User $user) {
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user) {
        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->school = $request->school;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('users.index');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('users.index');
    }
}
